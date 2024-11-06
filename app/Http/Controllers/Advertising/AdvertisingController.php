<?php

namespace App\Http\Controllers\Advertising;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Advertising\Services\AdvertisingService;

class AdvertisingController extends AbstractController
{
    public function __construct(AdvertisingService $service)
    {
        $this->service = $service;
    }
}
