<?php

namespace Modules\Menu\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\ApiController;
use Modules\Menu\Http\Requests\Admin\ItemMenu\CreateItemMenuRequest;
use Modules\Menu\Http\Requests\Admin\ItemMenu\UpdateItemMenuRequest;
use Modules\Menu\Presenters\Admin\ItemMenuPresenter;
use Modules\Menu\Repositories\Admin\ItemMenuRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ItemMenuController extends ApiController
{

    public $itemMenuRepository;
    public $entity;
    public $itemMenuPresenter;

    public function __construct(ItemMenuRepository $itemMenuRepository)
    {
        $this->itemMenuRepository = $itemMenuRepository;
        $this->entity             = $itemMenuRepository->getEntity();
        $this->itemMenuPresenter  = new ItemMenuPresenter();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $this->authorize('itemMenuList', $this->entity);
        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;
        $query = $this->itemMenuRepository;
        $query = $this->applyConstraintsFromRequest($query, $request, ['name']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $itemMenus = $query->paginate($limit);

        return $this->itemMenuPresenter->present($itemMenus);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateItemMenuRequest $request)
    {
        $this->authorize('store', $this->entity);

        $data           = $request->all();
        $data['status'] = $this->entity::ACTIVE;
        $itemMenus      = $this->itemMenuRepository->create($data);

        return $this->itemMenuPresenter->present($itemMenus);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $itemMenus = $this->itemMenuRepository->where('id', $id)->first();
        if (!$itemMenus) {
            throw new NotFoundHttpException('Item menu not found');
        }

        $this->authorize('show', $itemMenus);

        return $this->itemMenuPresenter->present($itemMenus);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateItemMenuRequest $request, $id)
    {
        $itemMenus = $this->itemMenuRepository->where('id', $id)->first();

        if (!$itemMenus) {
            throw new NotFoundHttpException('Item menu not found');
        }

        $this->authorize('update', $itemMenus);
        $data      = $request->only('menu_id', 'label', 'link', 'icon', 'order_by', 'parent_id');
        $itemMenus = $this->itemMenuRepository->update($data, $id);
        return $this->itemMenuPresenter->present($itemMenus);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $itemMenus = $this->itemMenuRepository->where('id', $id)->first();

        if (!$itemMenus) {
            throw new NotFoundHttpException('Item menu not found');
        }

        $this->authorize('destroy', $itemMenus);

        $itemMenus->delete();
        return $this->success();
    }
}
