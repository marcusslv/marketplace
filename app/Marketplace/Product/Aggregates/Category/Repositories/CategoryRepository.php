<?php

namespace App\Marketplace\Product\Aggregates\Category\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Product\Aggregates\Category\Entities\CategoryEntity;

class CategoryRepository extends AbstractRepository
{
    public function __construct(protected CategoryEntity $model) {}
}
