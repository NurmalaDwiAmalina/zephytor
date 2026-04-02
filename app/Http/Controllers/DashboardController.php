<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Order;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $recentOrders = $user->orders()->with('package')->latest()->take(5)->get();
        $invoices = $user->invoices()->with('order.package')->latest()->take(5)->get();
        $packages = Package::whereRaw('"is_active" = true')->orderBy('sort_order')->get();
        $totalOrders = $user->orders()->count();
        $activeOrders = $user->orders()->whereIn('status', ['pending', 'in_progress'])->count();
        $unpaidInvoices = $user->invoices()->where('status', 'unpaid')->count();

        return view('dashboard.index', compact(
            'recentOrders', 'invoices', 'packages',
            'totalOrders', 'activeOrders', 'unpaidInvoices'
        ));
    }

    public function orders()
    {
        $user = Auth::user();
        $orders = $user->orders()->with('package')->latest()->paginate(10);
        $packages = Package::whereRaw('"is_active" = true')->orderBy('sort_order')->get();
        return view('dashboard.orders', compact('orders', 'packages'));
    }

    public function createOrder(Request $request)
    {
        $packages = Package::whereRaw('"is_active" = true')->orderBy('sort_order')->get();
        $package  = $request->package_id ? Package::find($request->package_id) : $packages->first();
        return view('dashboard.order-create', compact('package', 'packages'));
    }

    public function storeOrder(Request $request)
    {
        $request->validate([
            'package_id'    => 'required|exists:packages,id',
            'customer_name' => 'required|string|max:255',
            'phone'         => 'required|string|max:20',
            'notes'         => 'nullable|string|max:1000',
        ]);

        $package = Package::findOrFail($request->package_id);
        $user = Auth::user();

        $order = Order::create([
            'order_number'  => 'ORD-' . strtoupper(uniqid()),
            'user_id'       => $user->id,
            'customer_name' => $request->customer_name,
            'phone'         => $request->phone,
            'package_id'    => $package->id,
            'status'        => 'pending',
            'total_price'   => $package->price,
            'notes'         => $request->notes,
        ]);

        return redirect('/dashboard/orders')->with('success', 'Order berhasil dibuat! Tim kami akan segera menghubungi Anda.');
    }

    public function invoices()
    {
        $user = Auth::user();
        $invoices = $user->invoices()->with('order.package')->latest()->paginate(10);
        return view('dashboard.invoices', compact('invoices'));
    }

    public function showInvoice(Invoice $invoice)
    {
        if ($invoice->user_id !== Auth::id()) {
            abort(403);
        }
        $invoice->load('order.package');
        return view('dashboard.invoice-show', compact('invoice'));
    }
}
