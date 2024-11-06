<?php

namespace App\Http\Controllers\ProductTotals;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Product\Aggregates\ProductTotals\Services\ProductTotalsService;

class ProductTotalsController extends AbstractController
{
    public function __construct(ProductTotalsService $service)
    {
        $this->service = $service;
    }
}
