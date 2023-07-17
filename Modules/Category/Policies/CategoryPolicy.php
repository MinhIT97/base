<?php

namespace Modules\Category\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class CategoryPolicy extends BasePolicy
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

    public function categoryList()
    {
        $user = $this->user;

        return $user->hasPermission('show-list-category');
    }
    public function store()
    {
        $user = $this->user;
        return $user->hasPermission('create-category');
    }
    public function show($user, $category)
    {
        return $user->hasPermission('show-category');
        return true;
    }
    public function update($user, $category)
    {
        return $user->hasPermission('update-category');
        return true;
    }
    public function destroy($user, $category)
    {
        return $user->hasPermission('delete-category');
        return true;
    }
}
