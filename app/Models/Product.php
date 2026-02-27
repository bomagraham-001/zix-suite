<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'slug', 'description',
        'price', 'image', 'placeholder_color',
        'is_featured', 'is_signature', 'is_active', 'sort_order',
    ];

    protected $casts = [
        'price'        => 'decimal:2',
        'is_featured'  => 'boolean',
        'is_signature' => 'boolean',
        'is_active'    => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeSignature($query)
    {
        return $query->where('is_signature', true);
    }

    public function getFormattedPriceAttribute(): string
    {
        return '₦' . number_format($this->price);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
