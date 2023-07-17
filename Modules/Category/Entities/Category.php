<?php

namespace Modules\Category\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

    const ACTIVE = 1;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'status',
        'hot',
        'thumbnail',
        'parent_id',
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
