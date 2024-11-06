<?php

namespace App\Marketplace\Product\Aggregates\Offer\Repositories;

use App\Marketplace\Abstracts\AbstractRepository;
use App\Marketplace\Product\Aggregates\Offer\Entities\OfferEntity;

class OfferRepository extends AbstractRepository
{
    public function __construct(OfferEntity $model)
    {
        $this->model = $model;
    }
}
