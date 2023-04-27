<?php

namespace Modules\User\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\User\Http\Requests\Admin\AttachRoleRequest;
use Modules\User\Http\Requests\Admin\DetachRoleRequest;
use Modules\User\Http\Requests\Admin\SyncRoleRequest;
use Modules\User\Presenters\UserPresenter;
use Modules\User\Repositories\Admin\UserRepository;

class UserRelationShipController extends Controller
{

    protected $user;
    protected $userRepository;
    protected $userPresenter;

    public function __construct(UserRepository $userRepository)
    {
        $this->user           = Auth::user();
        $this->userRepository = $userRepository;
        $this->userPresenter  = new UserPresenter();

    }

    public function attachRole(AttachRoleRequest $request, $id)
    {
        $permission = $this->userRepository->find($id);

        $roleIds = $request->role_ids;

        $attach = $this->userRepository->attachRoles($permission, $roleIds);

        return $this->userPresenter->present($attach);
    }

    public function detachRole(DetachRoleRequest $request, $id)
    {
        $permission = $this->userRepository->find($id);

        $permissionIds = $request->role_ids;

        $detach = $this->userRepository->detachRoles($permission, $permissionIds);

        return $this->userPresenter->present($detach);
    }

    public function syncRole(SyncRoleRequest $request, $id)
    {
        $permission = $this->userRepository->find($id);

        $permissionIds = $request->role_ids;

        $sync = $this->userRepository->syncRoles($permission, $permissionIds);

        return $this->userPresenter->present($sync);
    }
}
