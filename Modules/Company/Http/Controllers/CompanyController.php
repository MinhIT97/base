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
    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->companyPresenter  = new CompanyPresenter();

    }

    public function index()
    {
        $companies = $this->companyRepository->paginate(10);

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
