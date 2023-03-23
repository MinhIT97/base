<?php

namespace Modules\Company\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Company\Entities\Company;

class SeedCompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->createCompany();
    }

    public function createCompany()
    {
        Company::query()->upsert([[
            'name'         => 'Dinno',
            'email'        => 'minhnv@gmail.com',
            'phone_number' => '0986082324',
            'address'      => 'HN',
        ]], ['email']);
    }
}
