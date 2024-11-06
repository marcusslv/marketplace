<?php

namespace App\Marketplace\Product\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Product\Repositories\ProductRepository;

class ProductService extends AbstractService
{
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }
}
