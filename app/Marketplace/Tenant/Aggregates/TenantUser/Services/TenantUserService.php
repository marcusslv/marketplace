<?php

namespace App\Marketplace\Tenant\Aggregates\TenantUser\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Tenant\Aggregates\TenantUser\Repositories\TenantUserRepository;

class TenantUserService extends AbstractService
{
    public function __construct(TenantUserRepository $repository)
    {
        $this->repository = $repository;
    }
}
