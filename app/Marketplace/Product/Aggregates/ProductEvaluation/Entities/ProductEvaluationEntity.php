<?php

namespace App\Marketplace\Product\Aggregates\ProductEvaluation\Entities;

use App\Models\ProductEvaluation;

class ProductEvaluationEntity extends ProductEvaluation
{
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'comment',
        'tenant_id',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'tenant_id',
        'product_id',
        'user_id',
    ];
}
