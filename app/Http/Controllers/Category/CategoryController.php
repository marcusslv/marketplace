<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Product\Aggregates\Category\Services\CategoryService;

class CategoryController extends AbstractController
{
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }
}
