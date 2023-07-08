<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $fillable = [
        'name',
        'type_menu_id',
        'status',
        'company_id',
    ];

}
