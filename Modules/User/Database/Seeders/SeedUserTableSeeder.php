<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Company\Entities\Company;
use Modules\User\Entities\User;

class SeedUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
    }

    protected function createUser()
    {

        $company = Company::query()->first();

        User::query()->upsert([
            [
                "email"        => "minhnv@gmail.com",
                "phone_number" => "0986082324",
                "address"      => "hd",
                "username"     => "minhnv",
                "first_name"   => "dinno",
                "last_name"    => "Admin",
                "birth"        => "1997-08-06",
                "gender"       => "1",
                "password"     => bcrypt("secret"),
                "verify_token" => "",
                "company_id"   => $company->id,
            ],
            [
                "email"        => "minh06081997@gmail.com",
                "phone_number" => "0986082324",
                "address"      => "hd",
                "username"     => "minh06081997",
                "first_name"   => "dinno",
                "last_name"    => "Admin",
                "birth"        => "1996-08-06",
                "gender"       => "1",
                "password"     => bcrypt("secret"),
                "verify_token" => "",
                "company_id"   => $company->id,
            ],
        ], ['email']);
    }

}
