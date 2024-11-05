<?php

namespace App\Marketplace\Tenant\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Tenant\Entities\TenantEntity;

class TenantRepository extends AbstractRepository
{
    public function __construct(TenantEntity $model)
    {
        $this->model = $model;
    }
}
