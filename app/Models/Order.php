<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number', 'user_id', 'package_id', 'status',
        'total_price', 'notes', 'scope_of_work', 'agreement_data', 'agreed_at',
    ];

    protected $casts = [
        'scope_of_work' => 'array',
        'agreement_data' => 'array',
        'agreed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'pending' => 'Menunggu Konfirmasi',
            'in_progress' => 'Sedang Dikerjakan',
            'completed' => 'Selesai',
            'cancelled' => 'Dibatalkan',
            default => $this->status,
        };
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'pending' => '#f59e0b',
            'in_progress' => '#3b82f6',
            'completed' => '#10b981',
            'cancelled' => '#ef4444',
            default => '#777',
        };
    }
}
