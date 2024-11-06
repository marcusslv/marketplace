<?php

namespace App\Marketplace\Product\Aggregates\Category\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Product\Aggregates\Category\Repositories\CategoryRepository;

class CategoryService extends AbstractService
{
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
}
