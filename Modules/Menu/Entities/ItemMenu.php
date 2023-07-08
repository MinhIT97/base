<?php

namespace Modules\Menu\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemMenu extends Model
{
    use HasFactory;

    const ACTIVE = 1;

    protected $fillable = [
        'menu_id',
        'label',
        'link',
        'icon',
        'order_by',
        'status',
        'parent_id',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

}
