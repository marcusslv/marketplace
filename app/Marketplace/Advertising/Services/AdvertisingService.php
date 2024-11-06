<?php

namespace App\Marketplace\Advertising\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Advertising\Repositories\AdvertisingRepository;

class AdvertisingService extends AbstractService
{
    public function __construct(AdvertisingRepository $repository)
    {
        $this->repository = $repository;
    }
}
