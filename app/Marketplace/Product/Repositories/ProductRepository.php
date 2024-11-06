<?php

namespace App\Marketplace\Product\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Product\Entities\ProductEntity;

class ProductRepository extends AbstractRepository
{
    public function __construct(ProductEntity $model)
    {
        $this->model = $model;
    }
}
