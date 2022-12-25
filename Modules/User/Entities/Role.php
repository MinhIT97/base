<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status', 'description', 'level'];

    protected static function newFactory()
    {
        return \Modules\User\Database\factories\RoleFactory::new ();
    }
}
