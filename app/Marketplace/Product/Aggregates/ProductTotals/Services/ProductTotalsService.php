<?php

namespace App\Marketplace\Product\Aggregates\ProductTotals\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Product\Aggregates\ProductTotals\Repositories\ProductTotalsRepository;

class ProductTotalsService extends AbstractService
{
    public function __construct(ProductTotalsRepository $repository)
    {
        $this->repository = $repository;
    }
}
