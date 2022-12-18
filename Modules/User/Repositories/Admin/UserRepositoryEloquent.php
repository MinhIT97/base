<?php

namespace Modules\User\Repositories\Admin;

use Carbon\Carbon;
use Modules\User\Entities\User;
use Modules\User\Repositories\Admin\UserRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class AccountantRepositoryEloquent.
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function getEntity()
    {
        return $this->model;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function verifyEmail($user)
    {
        $user->email_verified    = 1;
        $user->status            = 1;
        $user->email_verified_at = Carbon::now();
        $user->save();
        return $user;
    }
}
