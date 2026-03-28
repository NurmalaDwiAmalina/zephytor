<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Order;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $invoices = Invoice::with(['user', 'order.package'])
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(15);

        return view('admin.invoices.index', compact('invoices'));
    }

    public function create(Request $request)
    {
        $orders = Order::with(['user', 'package'])->orderBy('created_at', 'desc')->get();
        $selectedOrder = $request->order_id ? Order::with(['user', 'package'])->find($request->order_id) : null;
        return view('admin.invoices.create', compact('orders', 'selectedOrder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id'  => 'required|exists:orders,id',
            'amount'    => 'required|numeric|min:0',
            'due_date'  => 'nullable|date',
            'notes'     => 'nullable|string',
        ]);

        $order = Order::with('user')->findOrFail($request->order_id);

        $invoice = Invoice::create([
            'invoice_number' => 'INV-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -6)),
            'order_id'       => $order->id,
            'user_id'        => $order->user_id,
            'amount'         => $request->amount,
            'status'         => 'unpaid',
            'due_date'       => $request->due_date,
            'notes'          => $request->notes,
        ]);

        return redirect('/admin/invoices/' . $invoice->id)->with('success', 'Invoice berhasil dibuat.');
    }

    public function show(Invoice $invoice)
    {
        $invoice->load(['user', 'order.package']);
        return view('admin.invoices.show', compact('invoice'));
    }

    public function updateStatus(Request $request, Invoice $invoice)
    {
        $request->validate(['status' => 'required|in:unpaid,paid,overdue,cancelled']);

        $invoice->update([
            'status'  => $request->status,
            'paid_at' => $request->status === 'paid' ? now() : $invoice->paid_at,
        ]);

        return redirect()->back()->with('success', 'Status invoice berhasil diperbarui.');
    }
}
