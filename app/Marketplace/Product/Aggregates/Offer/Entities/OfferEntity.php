<?php

namespace App\Marketplace\Product\Aggregates\Offer\Entities;

use App\Models\Offer;

class OfferEntity extends Offer
{
    protected $table = 'offers';

    protected $fillable = [
        'product_id',
        'external_id',
        'slug',
        'name',
        'price',
        'quantity',
        'image_url',
        'max_installment',
        'max_installment_without_fee',
        'tenant_id',
        'last_updated_at',
    ];

    protected $casts = [
        'price' => 'float',
        'quantity' => 'integer',
        'max_installment' => 'integer',
        'max_installment_without_fee' => 'integer',
        'last_updated_at' => 'datetime:Y-m-d H:i:s',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'tenant_id',
        'product_id',
    ];
}
