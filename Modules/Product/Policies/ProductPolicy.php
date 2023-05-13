<?php

namespace Modules\Product\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Core\Policies\BasePolicy;
use Tymon\JWTAuth\Facades\JWTAuth;

class ProductPolicy extends BasePolicy
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

    public function productList()
    {
        $user = $this->user;

        return $user->hasPermission('show-list-product');
    }
    public function store()
    {
        $user = $this->user;
        return $user->hasPermission('create-product');
    }
    public function show($user, $product)
    {
        return $user->hasPermission('show-product');
        return true;
    }
    public function update($user, $product)
    {
        return $user->hasPermission('update-product');
        return true;
    }
    public function destroy($user, $product)
    {
        return $user->hasPermission('delete-product');
        return true;
    }
}
