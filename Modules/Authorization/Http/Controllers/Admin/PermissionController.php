<?php

namespace Modules\Authorization\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Authorization\Presenters\PermissionPresenter;
use Modules\Authorization\Repositories\PermissionRepository;
use Modules\Core\Http\Controllers\ApiController;

class PermissionController extends ApiController
{

    protected $permissionRepository;
    protected $permissionPresenter;
    protected $entity;
    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->permissionPresenter  = new PermissionPresenter();
        $this->entity               = $permissionRepository->getEntity();
    }

    function list(Request $request) {

        $this->authorize('permissionList', $this->entity);

        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;

        $query = $this->permissionRepository;

        $query = $this->applyConstraintsFromRequest($query, $request, ['name']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $permissions = $query->paginate($limit);

        return $this->permissionPresenter->present($permissions);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $permission = $this->permissionRepository->find($id);
        $this->authorize('show', $permission);
        return $this->permissionPresenter->present($permission);
    }
}
