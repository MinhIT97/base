<?php

namespace Modules\Company\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Company\Http\Requests\StoreCompanyRequest;
use Modules\Company\Http\Requests\UpdateCompanyRequest;
use Modules\Company\Presenters\CompanyPresenter;
use Modules\Company\Repositories\CompanyRepository;
use Modules\Core\Http\Controllers\ApiController;

class CompanyController extends ApiController
{

    protected $companyRepository;
    protected $companyPresenter;
    protected $entity;
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->entity            = $companyRepository->getEntity();
        $this->companyPresenter  = new CompanyPresenter();

    }

    public function index(Request $request)
    {
        $this->authorize('companyList', $this->entity);

        $limit = $request->has('page_size') ? (int) $request->get('page_size') : 15;

        $query = $this->companyRepository;
        $query = $this->applyConstraintsFromRequest($query, $request, ['name', 'phone_number', 'email']);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $companies = $query->paginate($limit);

        return $this->companyPresenter->present($companies);
    }

    public function store(StoreCompanyRequest $request)
    {
        $this->authorize('store', $this->entity);

        $data    = $request->all();
        $company = $this->companyRepository->create($data);

        return $this->companyPresenter->present($company);
    }

    public function show($id)
    {
        $company = $this->companyRepository->find($id);

        $this->authorize('show', $company);

        return $this->companyPresenter->present($company);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(UpdateCompanyRequest $request, $id)
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
        $company = $this->companyRepository->delete($id);
        $this->authorize('destroy', $company);
        return $this->success();
    }
}
