<?php

namespace App\Marketplace\Product\Aggregates\Offer\Services;

use App\Marketplace\Abstracts\AbstractService;
use App\Marketplace\Product\Aggregates\Offer\Repositories\OfferRepository;

class OfferService extends AbstractService
{
    public function __construct(OfferRepository $repository)
    {
        $this->repository = $repository;
    }
}
