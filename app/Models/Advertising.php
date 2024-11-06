<?php

namespace App\Models;

use App\Marketplace\Traits\HasTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Advertising extends Model
{
    /** @use HasFactory<\Database\Factories\AdvertisingFactory> */
    use HasFactory, HasSlug, HasTenant;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
