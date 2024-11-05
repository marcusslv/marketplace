<?php

namespace App\Marketplace\Tenant\Repositories;

use App\Marketplace\Tenant\Entities\TenantEntity;
use App\Marketplace\Abstracts\AbstractRepository;

class TenantRepository extends AbstractRepository
{
    public function __construct(TenantEntity $model)
    {
        $this->model = $model;
    }
}
