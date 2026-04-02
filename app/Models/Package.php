<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'price', 'price_display',
        'badge', 'features', 'guarantee', 'wa_link', 'is_popular',
        'is_active', 'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function resolveRouteBinding($value, $field = null)
    {
        return $this->where($field ?? $this->getRouteKeyName(), $value)->first()
            ?? $this->firstOrNew(['id' => 0]);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
