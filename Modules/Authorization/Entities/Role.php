<?php

namespace Modules\Authorization\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Company\Entities\Company;
use Modules\User\Entities\User;

class Role extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

    protected $fillable = ['name', 'slug', 'company_id', 'user_id', 'status', 'description', 'level'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
