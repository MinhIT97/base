<?php

namespace Modules\Menu\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Core\Http\Controllers\ApiController;
use Modules\Menu\Http\Requests\Admin\Menu\StoreMenuRequest;
use Modules\Menu\Http\Requests\Admin\Menu\UpdateMenuRequest;
use Modules\Menu\Presenters\Admin\MenuPresenter;
use Modules\Menu\Repositories\Admin\MenuRepository;

class MenuController extends ApiController
{
    public $menuRepository;
    public $menuPresenter;
    public $entity;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
        $this->entity         = $menuRepository->getEntity();
        $this->menuPresenter  = new MenuPresenter();

    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $this->authorize('menuList', $this->entity);
        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;
        $query = $this->menuRepository;
        $query = $this->applyConstraintsFromRequest($query, $request, ['name']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $menus = $query->paginate($limit);

        return $this->menuPresenter->present($menus);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function store(StoreMenuRequest $request)
    {
        $this->authorize('store', $this->entity);

        $data               = $request->all();
        $data['company_id'] = Auth::user()->company_id;
        $data['status']     = $this->entity::ACTIVE;
        $menu               = $this->menuRepository->create($data);

        return $this->menuPresenter->present($menu);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $this->authorize('show', $this->entity);
        $menu = $this->menuRepository->find($id);
        return $this->menuPresenter->present($menu);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateMenuRequest $request, $id)
    {
        $menu = $this->menuRepository->find($id);
        $this->authorize('update', $menu);

        $data = $request->only('name');
        $menu = $this->menuRepository->update($data, $id);
        return $this->menuPresenter->present($menu);

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $menu = $this->menuRepository->find($id);
        $this->authorize('destroy', $menu);

        $menu->delete();
        return $this->success();
    }
}
