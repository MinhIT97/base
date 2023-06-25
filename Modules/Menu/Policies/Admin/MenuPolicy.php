<?php

namespace Modules\Menu\Policies\Admin;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class MenuPolicy extends BasePolicy
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

    public function menuList()
    {
        $user = $this->user;

        return $user->hasPermission('show-list-menu');
    }
    public function store()
    {
        $user = $this->user;
        return $user->hasPermission('create-menu');
    }
    public function show($user, $menu)
    {
        return $user->hasPermission('show-menu');
        return true;
    }
    public function update($user, $menu)
    {
        return $user->hasPermission('update-menu');
        return true;
    }
    public function destroy($user, $menu)
    {
        return $user->hasPermission('delete-menu');
        return true;
    }
}
