<?php

namespace App\Marketplace\Tenant\Services;

use App\Marketplace\Tenant\Repositories\TenantRepository;
use App\Marketplace\Abstracts\AbstractService;

class TenantService extends AbstractService
{
    public function __construct(TenantRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getTenantByDomain(string $domain)
    {
        return $this->repository->findOneWhere(['domain' => $domain]);
    }
}
