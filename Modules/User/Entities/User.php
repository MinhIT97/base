<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Prettus\Repository\Traits\TransformableTrait;

class User extends Model
{
    use HasFactory, TransformableTrait;

    protected $fillable = [
        'email',
        'username',
        'phone_number',
        'address',
        'first_name',
        'last_name',
        'avatar',
        'password',
        'verify_token',
        'gender',
        'birth',
        'status',
        'email_verified_at',
        "email_verified",
        'verify_token',
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected static function newFactory()
    {
        return \Modules\User\Database\factories\UserFactory::new ();
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function schema()
    {
        return [];
    }

}
