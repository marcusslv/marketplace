<?php

namespace App\Marketplace\Product\Entities;

use App\Marketplace\Product\Aggregates\Category\Entities\CategoryEntity;
use App\Marketplace\Product\Aggregates\Offer\Entities\OfferEntity;
use App\Marketplace\Tenant\Entities\TenantEntity;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductEntity extends Product
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'external_id',
        'slug',
        'description',
        'is_active',
        'category_id',
        'review_quantity',
        'rating_average',
        'image_url',
        'tenant_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'last_updated' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'tenant_id',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryEntity::class, 'category_id', 'id');
    }

    public function offers(): HasMany
    {
        return $this->hasMany(OfferEntity::class, 'product_id', 'id');
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(TenantEntity::class, 'tenant_id', 'id');
    }
}
