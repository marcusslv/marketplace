<?php

namespace App\Marketplace\Product\Aggregates\ProductTotals\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Product\Aggregates\ProductTotals\Entities\ProductTotalsEntity;

class ProductTotalsRepository extends AbstractRepository
{
    public function __construct(ProductTotalsEntity $model)
    {
        $this->model = $model;
    }
}
