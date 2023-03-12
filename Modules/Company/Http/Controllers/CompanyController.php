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
        $limit = $request->has('limit') ? (int) $request->get('limit') : 15;

        $query = $this->companyRepository;

        $query = $this->applyConstraintsFromRequest($query, $request);
        $query = $this->applySearchFromRequest($query, ['name'], $request);
        $query = $this->applyOrderByFromRequest($query, $request);

        $companies = $query->paginate($limit);

        return $this->companyPresenter->present($companies);
    }

    public function store(StoreCompanyRequest $request)
    {
        $data    = $request->all();
        $company = $this->companyRepository->create($data);

        return $this->companyPresenter->present($company);
    }

    public function show($id)
    {
        $company = $this->companyRepository->find($id);

        return $this->companyPresenter->present($company);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('company::edit');
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
        return $this->success();
    }
}
