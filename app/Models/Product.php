<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'vendor_id',
        'name',
        'category',
        'price',
        'stock',
        'status',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function getStatusAttribute()
    {
        if (!array_key_exists('status', $this->attributes)) {
            return $this->stock > 0 ? 'In Stock' : 'Out of Stock';
        }
        return $this->attributes['status'];
    }
}
