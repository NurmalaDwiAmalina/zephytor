<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number', 'order_id', 'user_id', 'amount',
        'status', 'due_date', 'paid_at', 'notes',
        'payment_proof', 'proof_uploaded_at',
    ];

    protected $casts = [
        'due_date'           => 'date',
        'paid_at'            => 'datetime',
        'proof_uploaded_at'  => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name'  => $this->order->customer_name ?? 'Klien',
            'email' => '-',
        ]);
    }

    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'unpaid' => 'Belum Dibayar',
            'paid' => 'Lunas',
            'overdue' => 'Jatuh Tempo',
            'cancelled' => 'Dibatalkan',
            default => $this->status,
        };
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'unpaid' => '#f59e0b',
            'paid' => '#10b981',
            'overdue' => '#ef4444',
            'cancelled' => '#777',
            default => '#777',
        };
    }

    public function getFormattedAmountAttribute(): string
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }
}
