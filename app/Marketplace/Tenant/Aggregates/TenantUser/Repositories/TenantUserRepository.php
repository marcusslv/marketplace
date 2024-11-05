<?php

namespace App\Marketplace\Tenant\Aggregates\TenantUser\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Tenant\Aggregates\TenantUser\Entities\TenantUserEntity;

class TenantUserRepository extends AbstractRepository
{
    public function __construct(TenantUserEntity $model)
    {
        $this->model = $model;
    }
}
