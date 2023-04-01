<?php

namespace Modules\Authorization\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Authorization\Http\Requests\Role\StoreRoleRequest;
use Modules\Authorization\Presenters\RolePresenter;
use Modules\Authorization\Repositories\RoleRepository;
use Modules\Core\Http\Controllers\ApiController;

class RoleController extends ApiController
{

    protected $roleRepository;
    protected $rolePresenter;
    public function __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
        $this->rolePresenter  = new RolePresenter();

    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    function list(Request $request) {
        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;

        $query = $this->roleRepository;

        $query = $this->applyConstraintsFromRequest($query, $request, ['name']);
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

        return $this->rolePresenter->present($role);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('authorization::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {

        $detele = $this->roleRepository->delete($id);

        return $this->success();
    }
}
