<?php

namespace Modules\Product\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Core\Http\Controllers\ApiController;
use Modules\Product\Http\Requests\Admin\StoreProductRequest;
use Modules\Product\Presenters\Admin\ProductPresenter;
use Modules\Product\Repositories\Admin\ProductRepository;

class ProductController extends ApiController
{

    protected $productRepository;
    protected $productPresenter;
    protected $entity;
    protected $user;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
        $this->productPresenter  = new ProductPresenter();
        $this->entity            = $productRepository->getEntity();
        $this->user              = Auth::user();
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        $this->authorize('productList', $this->entity);
        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;
        $query = $this->productRepository;
        $query = $this->applyConstraintsFromRequest($query, $request, ['name', 'sku', 'description']);
        $query = $this->applySearchFromRequest($query, ['name','sku' ,'description'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $products = $query->paginate($limit);

        return $this->productPresenter->present($products);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StoreProductRequest $request)
    {
        $this->authorize('store', $this->entity);
        $user = $this->user;
        $data = $request->all();

        $data['author_id']      = $user->id;
        $data['published_date'] = Carbon::now();
        $product                = $this->productRepository->create($data);

        return $this->productPresenter->present($product);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        $this->authorize('show', $product);
        return $this->productPresenter->present($product);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('product::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $company = $this->companyRepository->find($id);
        $this->authorize('update', $company);

        $company->update($data);
        return $this->companyPresenter->present($company);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);
        $this->authorize('destroy', $product);

        $product = $this->productRepository->delete($id);
        return $this->success();
    }
}
