<?php

namespace Modules\Authorization\Http\Controllers;

use Modules\Authorization\Http\Requests\Role\AttachPermissionReqeust;
use Modules\Authorization\Presenters\RolePresenter;
use Modules\Authorization\Repositories\RoleRepository;
use Modules\Core\Http\Controllers\ApiController;

class RoleRelationShipController extends ApiController
{

    protected $user;
    protected $roleRepository;
    protected $rolePresenter;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->user           = $this->getAuthenticatedUser();
        $this->rolePresenter  = new RolePresenter();
    }

    public function attachPermission(AttachPermissionReqeust $request, $id)
    {
        $user = $this->user;

        $role = $this->roleRepository->find($id);

        $permissionIds = $request->permission_ids;

        $attach = $this->roleRepository->attachPermission($role, $permissionIds);

        return $this->rolePresenter->present($attach);
    }

    public function detachPermission(AttachPermissionReqeust $request, $id)
    {
        $user = $this->user;

        $role = $this->roleRepository->find($id);

        $permissionIds = $request->permission_ids;

        $attach = $this->roleRepository->detachPermission($role, $permissionIds);

        return $this->rolePresenter->present($attach);
    }

    public function syncPermission(AttachPermissionReqeust $request, $id)
    {
        $user = $this->user;

        $role = $this->roleRepository->find($id);

        $permissionIds = $request->permission_ids;

        $attach = $this->roleRepository->syncPermission($role, $permissionIds);

        return $this->rolePresenter->present($attach);
    }
}
