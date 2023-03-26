<?php

namespace Modules\Authorization\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Authorization\Entities\Permission;

class SeedPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->createPermissionCompany();
    }

    protected function createPermissionCompany()
    {

        Permission::query()->upsert([
            [
                'name'        => 'Create company',
                'slug'        => 'create-company',
                'description' => 'Create company permission lets users create a company',
                'model'       => 'company',
            ],
            [
                'name'        => 'Update company',
                'slug'        => 'update-company',
                'description' => 'Update company is the permission that allows users to edit information about a company.',
                'model'       => 'company',
            ],
            [
                'name'        => 'Delete company',
                'slug'        => 'delete-company',
                'description' => 'Delete company" permission is a right that allows users to delete a company.',
                'model'       => 'company',
            ],
            [
                'name'        => 'Show company',
                'slug'        => 'show-company',
                'description' => 'Show company" is permission to access detailed information of a company.',
                'model'       => 'company',
            ],
            [
                'name'        => 'Show list company',
                'slug'        => 'show-list-company',
                'description' => 'Show list company permission grants access to the list of companies in the system',
                'model'       => 'company',
            ],
        ], ['name']);
    }
}
