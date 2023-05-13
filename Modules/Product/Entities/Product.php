<?php

namespace Modules\Product\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers, SoftDeletes;

    const STATUS_PENDING   = 0;
    const STATUS_PUBLISHED = 1;

    const HOT = 1;

    protected $fillable = [
        'name',
        'slug',
        'quantity',
        'sold_quantity',
        'thumbnail',
        'status',
        'description',
        'price',
        'original_price',
        'is_hot',
        'author_id',
        'published_date',
        'sku',
        'order',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

}
