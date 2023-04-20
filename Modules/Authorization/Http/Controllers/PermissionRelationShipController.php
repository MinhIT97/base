<?php

namespace Modules\Authorization\Http\Controllers;

use Modules\Authorization\Http\Requests\Permission\AttachRoleRequest;
use Modules\Authorization\Http\Requests\Permission\DetachRoleRequest;
use Modules\Authorization\Http\Requests\Permission\SyncRoleRequest;
use Modules\Authorization\Presenters\PermissionPresenter;
use Modules\Authorization\Repositories\PermissionRepository;
use Modules\Core\Http\Controllers\ApiController;

class PermissionRelationShipController extends ApiController
{

    protected $user;
    protected $permissionRepository;
    protected $permissionPresenter;
    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->user                 = $this->getAuthenticatedUser();
        $this->permissionPresenter  = new PermissionPresenter();
    }

    public function attachRole(AttachRoleRequest $request, $id)
    {
        $user = $this->user;

        $permission = $this->permissionRepository->find($id);

        $roleIds = $request->role_ids;

        $attach = $this->permissionRepository->attachRoles($permission, $roleIds);

        return $this->permissionPresenter->present($attach);
    }

    public function detachRole(DetachRoleRequest $request, $id)
    {
        $user = $this->user;

        $permission = $this->permissionRepository->find($id);

        $permissionIds = $request->role_ids;

        $detach = $this->permissionRepository->detachRoles($permission, $permissionIds);

        return $this->permissionPresenter->present($detach);
    }

    public function syncRole(SyncRoleRequest $request, $id)
    {
        $user = $this->user;

        $permission = $this->permissionRepository->find($id);

        $permissionIds = $request->role_ids;

        $sync = $this->permissionRepository->syncRoles($permission, $permissionIds);

        return $this->permissionPresenter->present($sync);
    }

}
