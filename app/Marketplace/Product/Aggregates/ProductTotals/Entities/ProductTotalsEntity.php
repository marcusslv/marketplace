<?php

namespace App\Marketplace\Product\Aggregates\ProductTotals\Entities;

use App\Marketplace\Traits\HasTenant;
use App\Models\ProductTotals;

class ProductTotalsEntity extends ProductTotals
{
    use HasTenant;

    protected $table = 'product_totals';

    protected $fillable = [
        'product_id',
        'available',
        'quantity_sales',
        'chargebacks',
        'devolution',
        'cancellations',
        'total_abandonment',
        'last_updated_at',
        'tenant_id',
    ];
}
