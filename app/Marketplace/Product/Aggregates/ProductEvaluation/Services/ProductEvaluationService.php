<?php

namespace App\Marketplace\Product\Aggregates\ProductEvaluation\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Product\Aggregates\ProductEvaluation\Repositories\ProductEvaluationRepository;

class ProductEvaluationService extends AbstractService
{
    public function __construct(ProductEvaluationRepository $repository)
    {
        $this->repository = $repository;
    }
}
