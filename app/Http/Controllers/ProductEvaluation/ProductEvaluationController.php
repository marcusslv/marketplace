<?php

namespace App\Http\Controllers\ProductEvaluation;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Product\Aggregates\ProductEvaluation\Services\ProductEvaluationService;

class ProductEvaluationController extends AbstractController
{
    public function __construct(ProductEvaluationService $service)
    {
        $this->service = $service;
    }
}
