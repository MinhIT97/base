<?php

namespace Modules\Authorization\Http\Controllers\Admin;

use Modules\Authorization\Http\Requests\Role\AttachPermissionReqeust;
use Modules\Authorization\Presenters\RolePresenter;
use Modules\Authorization\Repositories\RoleRepository;
use Modules\Core\Http\Controllers\ApiController;

class RoleRelationShipController extends ApiController
{

    protected $user;
    protected $roleRepository;
    protected $rolePresenter;
    protected $entity;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->user           = $this->getAuthenticatedUser();
        $this->rolePresenter  = new RolePresenter();
        $this->entity         = $roleRepository->getEntity();
    }

    public function attachPermissions(AttachPermissionReqeust $request, $id)
    {

        $this->authorize('assign', $this->entity);

        $user = $this->user;

        $role = $this->roleRepository->find($id);

        $permissionIds = $request->permission_ids;

        $attach = $this->roleRepository->attachPermissions($role, $permissionIds);

        return $this->rolePresenter->present($attach);
    }

    public function detachPermissions(AttachPermissionReqeust $request, $id)
    {
        $this->authorize('assign', $this->entity);

        $user = $this->user;

        $role = $this->roleRepository->find($id);

        $permissionIds = $request->permission_ids;

        $attach = $this->roleRepository->detachPermissions($role, $permissionIds);

        return $this->rolePresenter->present($attach);
    }

    public function syncPermissions(AttachPermissionReqeust $request, $id)
    {
        $this->authorize('assign', $this->entity);

        $user = $this->user;

        $role = $this->roleRepository->find($id);

        $permissionIds = $request->permission_ids;

        $attach = $this->roleRepository->syncPermissions($role, $permissionIds);

        return $this->rolePresenter->present($attach);
    }
}
