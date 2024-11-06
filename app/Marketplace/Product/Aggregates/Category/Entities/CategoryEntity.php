<?php

namespace App\Marketplace\Product\Aggregates\Category\Entities;

use App\Models\Category;
use Spatie\Sluggable\SlugOptions;

class CategoryEntity extends Category
{
    protected $table = 'categories';

    protected $fillable = [
        'slug',
        'name',
        'description',
        'parent_id',
        'tenant_id',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'tenant_id',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
