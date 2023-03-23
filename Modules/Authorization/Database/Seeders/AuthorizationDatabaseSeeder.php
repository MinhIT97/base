<?php

namespace Modules\Authorization\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class AuthorizationDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call([
            SeedPermissionTableSeeder::class,
        ]);
    }
}
