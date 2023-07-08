<?php

namespace Modules\Menu\Policies\Admin;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class ItemMenuPolicy extends BasePolicy
{
    use HandlesAuthorization;

    protected $user;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function itemMenuList()
    {
        $user = $this->user;

        return $user->hasPermission('show-list-item-menu');
    }
    public function store()
    {
        $user = $this->user;
        return $user->hasPermission('create-item-menu');
    }
    public function show($user, $menu)
    {
        return $user->hasPermission('show-item-menu');
        return true;
    }
    public function update($user, $menu)
    {
        return $user->hasPermission('update-item-menu');
        return true;
    }
    public function destroy($user, $menu)
    {
        return $user->hasPermission('delete-item-menu');
        return true;
    }
}
