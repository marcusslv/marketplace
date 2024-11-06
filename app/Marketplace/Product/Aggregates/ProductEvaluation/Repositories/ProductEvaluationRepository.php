<?php

namespace App\Marketplace\Product\Aggregates\ProductEvaluation\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Product\Aggregates\ProductEvaluation\Entities\ProductEvaluationEntity;

class ProductEvaluationRepository extends AbstractRepository
{
    public function __construct(ProductEvaluationEntity $model)
    {
        $this->model = $model;
    }
}
