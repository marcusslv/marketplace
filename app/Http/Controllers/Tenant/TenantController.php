<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Tenant\Services\TenantService;


class TenantController extends AbstractController
{
    public function __construct(TenantService $service)
    {
        $this->service = $service;
    }
}
