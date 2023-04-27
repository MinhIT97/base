<?php

namespace Modules\Authorization\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Authorization\Http\Requests\Role\StoreRoleRequest;
use Modules\Authorization\Http\Requests\Role\UpdateRoleRequest;
use Modules\Authorization\Presenters\RolePresenter;
use Modules\Authorization\Repositories\RoleRepository;
use Modules\Core\Http\Controllers\ApiController;

class RoleController extends ApiController
{

    protected $roleRepository;
    protected $rolePresenter;
    protected $entity;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->rolePresenter  = new RolePresenter();
        $this->entity         = $roleRepository->getEntity();

    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    function list(Request $request) {

        $this->authorize('roleList', $this->entity);

        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;

        $query = $this->roleRepository;
        $query = $this->applyConstraintsFromRequest($query, $request, ['name', 'status']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $roles = $query->paginate($limit);

        return $this->rolePresenter->present($roles);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreRoleRequest $request)
    {

        $this->authorize('store', $this->entity);
        $data = $request->only('name', 'description', 'status');

        $user               = $this->getAuthenticatedUser();
        $data['user_id']    = $user->id;
        $data['company_id'] = $user->company_id;
        $role               = $this->roleRepository->create($data);

        return $this->rolePresenter->present($role);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $role = $this->roleRepository->find($id);
        $this->authorize('show', $role);

        return $this->rolePresenter->present($role);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        $user         = $this->getAuthenticatedUser();
        $data         = $request->only('name', 'description', 'status');
        $data['slug'] = '';

        $role = $this->roleRepository->find($id);
        $this->authorize('update', $role);
        $role = $role->update($data);

        return $this->rolePresenter->present($role);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->find($id);
        $this->authorize('update', $role);
        $detele = $this->roleRepository->delete($id);
        return $this->success();
    }
}
