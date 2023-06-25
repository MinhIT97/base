<?php

namespace Modules\Menu\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Menu\Entities\TypeMenu;

class MenuTypeSeedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        TypeMenu::query()->upsert([
            [
                'id'     => 1,
                'name'   => 'Header',
                'status' => 1,
            ],
        ], ['id']);

        // $this->call("OthersTableSeeder");
    }
}
