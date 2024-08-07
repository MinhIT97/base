<?php

namespace Modules\Log\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Log extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'action', 'details'];

    protected $casts = [
        'details' => 'array',
    ];

}
