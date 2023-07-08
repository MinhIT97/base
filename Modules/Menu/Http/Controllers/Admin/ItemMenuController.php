<?php

namespace Modules\Menu\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\ApiController;
use Modules\Menu\Http\Requests\Admin\ItemMenu\CreateItemMenuRequest;
use Modules\Menu\Presenters\Admin\ItemMenuPresenter;
use Modules\Menu\Repositories\Admin\ItemMenuRepository;

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
        return view('menu::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('menu::edit');
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
