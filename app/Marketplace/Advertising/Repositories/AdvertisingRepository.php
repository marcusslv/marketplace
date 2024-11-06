<?php

namespace App\Marketplace\Advertising\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Advertising\Entities\AdvertisingEntity;

class AdvertisingRepository extends AbstractRepository
{
    public function __construct(AdvertisingEntity $model)
    {
        $this->model = $model;
    }
}
