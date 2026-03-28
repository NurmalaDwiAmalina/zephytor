<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Package;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders     = Order::count();
        $pendingOrders   = Order::where('status', 'pending')->count();
        $totalInvoices   = Invoice::count();
        $unpaidInvoices  = Invoice::where('status', 'unpaid')->count();
        $totalRevenue    = Invoice::where('status', 'paid')->sum('amount');
        $totalUsers      = User::where('role', 'user')->count();
        $recentOrders    = Order::with(['user', 'package'])->latest()->take(8)->get();
        $recentInvoices  = Invoice::with(['user', 'order.package'])->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalOrders', 'pendingOrders', 'totalInvoices',
            'unpaidInvoices', 'totalRevenue', 'totalUsers',
            'recentOrders', 'recentInvoices'
        ));
    }
}
