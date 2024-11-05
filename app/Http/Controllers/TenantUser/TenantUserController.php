<?php

namespace App\Http\Controllers\TenantUser;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Tenant\Aggregates\TenantUser\Services\TenantUserService;

class TenantUserController extends AbstractController
{
    public function __construct(TenantUserService $service)
    {
        $this->service = $service;
    }
}
