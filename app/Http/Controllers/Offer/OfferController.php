<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\AbstractController;
use App\Marketplace\Product\Aggregates\Offer\Services\OfferService;

class OfferController extends AbstractController
{
    public function __construct(OfferService $service)
    {
        $this->service = $service;
    }
}
