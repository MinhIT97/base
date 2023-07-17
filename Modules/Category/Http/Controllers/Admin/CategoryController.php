<?php

namespace Modules\Category\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Category\Http\Requests\Admin\CreateCategoryRequest;
use Modules\Category\Presenters\Admin\CategoryPresenter;
use Modules\Category\Repositories\Admin\CategoryRepository;
use Modules\Core\Http\Controllers\ApiController;

class CategoryController extends ApiController
{

    public $categoryRepository;
    public $categoryPresenter;
    public $entity;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->entity             = $categoryRepository->getEntity();
        $this->categoryPresenter  = new CategoryPresenter();

    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $this->authorize('categoryList', $this->entity);
        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;
        $query = $this->categoryRepository;
        $query = $this->applyConstraintsFromRequest($query, $request, ['name']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $categories = $query->paginate($limit);

        return $this->categoryPresenter->present($categories);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateCategoryRequest $request)
    {
        $this->authorize('store', $this->entity);

        $data               = $request->all();
        $data['company_id'] = Auth::user()->company_id;
        $data['status']     = $this->entity::ACTIVE;
        $menu               = $this->categoryRepository->create($data);

        return $this->categoryPresenter->present($menu);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $category = $this->categoryRepository->find($id);

        $this->authorize('show', $category);

        return $this->categoryPresenter->present($category);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $category = $this->categoryRepository->find($id);
        $this->authorize('update', $category);

        $data = $request->only('name', 'type', 'hot', 'thumbnail', 'parent_id');

        $category = $this->categoryRepository->update($data, $id);
        return $this->categoryPresenter->present($category);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $category = $this->categoryRepository->find($id);
        $this->authorize('destroy', $category);

        $category->delete();
        return $this->success();
    }
}
