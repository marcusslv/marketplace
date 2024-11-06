<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Product\Services\ProductService;

class ProductController extends AbstractController
{
    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }
}
