<?php

namespace App\Marketplace\Advertising\Entities;

use App\Models\Advertising;
use Spatie\Sluggable\SlugOptions;

class AdvertisingEntity extends Advertising
{
    protected $table = 'advertisings';

    protected $fillable = [
        'slug',
        'name',
        'image_desktop_url',
        'image_mobile_url',
        'is_active',
        'promotion_url',
        'order',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
