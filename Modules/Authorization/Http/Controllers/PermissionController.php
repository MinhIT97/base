<?php

namespace Modules\Authorization\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Authorization\Presenters\PermissionPresenter;
use Modules\Authorization\Repositories\PermissionRepository;
use Modules\Core\Http\Controllers\ApiController;

class PermissionController extends ApiController
{

    protected $permissionRepository;
    protected $permissionPresenter;
    public function __construct(PermissionRepository $permissionRepository)
    {
        $this->permissionRepository = $permissionRepository;
        $this->permissionPresenter  = new PermissionPresenter();
    }

    function list(Request $request) {
        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;

        $query = $this->permissionRepository;

        $query = $this->applyConstraintsFromRequest($query, $request, ['name']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $companies = $query->paginate($limit);

        return $this->permissionPresenter->present($companies);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $company = $this->permissionRepository->find($id);

        return $this->permissionPresenter->present($company);
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
        //
    }
}
