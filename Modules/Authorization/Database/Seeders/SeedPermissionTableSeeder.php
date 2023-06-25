<?php

namespace Modules\Authorization\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Authorization\Entities\Permission;
use Modules\Authorization\Entities\Role;
use Modules\Company\Entities\Company;
use Modules\Menu\Entities\Menu;

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
        $this->createPermissionRole();
        $this->createPermissionPermissionRelationShip();
        $this->createPermissionPermission();
        $this->createPermissionMenu();
    }

    protected function createPermissionCompany()
    {

        Permission::query()->upsert([
            [
                'name'        => 'Create company',
                'slug'        => 'create-company',
                'description' => 'Create company permission lets users create a company',
                'model'       => Company::class,
            ],
            [
                'name'        => 'Update company',
                'slug'        => 'update-company',
                'description' => 'Update company is the permission that allows users to edit information about a company.',
                'model'       => Company::class,
            ],
            [
                'name'        => 'Delete company',
                'slug'        => 'delete-company',
                'description' => 'Delete company permission is a right that allows users to delete a company.',
                'model'       => Company::class,
            ],
            [
                'name'        => 'Show company',
                'slug'        => 'show-company',
                'description' => 'Show company is permission to access detailed information of a company.',
                'model'       => Company::class,
            ],
            [
                'name'        => 'Show list company',
                'slug'        => 'show-list-company',
                'description' => 'Show list company permission grants access to the list of companies in the system',
                'model'       => Company::class,
            ],
        ], ['name']);
    }
    protected function createPermissionRole()
    {
        Permission::query()->upsert([
            [
                'name'        => 'Create role',
                'slug'        => 'create-role',
                'description' => 'Create role permission lets users create a role.',
                'model'       => Role::class,
            ],
            [
                'name'        => 'Update role',
                'slug'        => 'update-role',
                'description' => 'Update role is the permission that allows users to edit information about a role.',
                'model'       => Role::class,
            ],
            [
                'name'        => 'Delete role',
                'slug'        => 'delete-role',
                'description' => 'Delete role permission is a right that allows users to delete a role.',
                'model'       => Role::class,
            ],
            [
                'name'        => 'Show role',
                'slug'        => 'show-role',
                'description' => 'Show role is permission to access detailed information of a role.',
                'model'       => Role::class,
            ],
            [
                'name'        => 'Show list role',
                'slug'        => 'show-list-role',
                'description' => 'Show list role permission grants access to the list of role in the system',
                'model'       => Role::class,
            ],
        ], ['name']);
    }
    protected function createPermissionPermissionRelationShip()
    {
        Permission::query()->upsert([
            [
                'name'        => 'Assign permissions',
                'slug'        => 'assign-permissions',
                'description' => 'Assign permissions is a permission that allows users to set access permissions for roles in the system, providing flexibility and efficiency in managing access rights.',
                'model'       => Company::class,
            ],
        ], ['name']);
    }

    protected function createPermissionPermission()
    {
        Permission::query()->upsert([
            [
                'name'        => 'Show list permission',
                'slug'        => 'show-list-permission',
                'description' => 'Show list permission permission grants access to the list of permission in the system',
                'model'       => Permission::class,
            ],
            [
                'name'        => 'Show permission',
                'slug'        => 'show-permission',
                'description' => 'Show permission is permission to access detailed information of a permissions.',
                'model'       => Permission::class,
            ],
        ], ['name']);
    }

    protected function createPermissionMenu()
    {

        Permission::query()->upsert([
            [
                'name'        => 'Create menu',
                'slug'        => 'create-menu',
                'description' => 'Create menu permission lets users create a menu',
                'model'       => Menu::class,
            ],
            [
                'name'        => 'Update menu',
                'slug'        => 'update-menu',
                'description' => 'Update menu is the permission that allows users to edit information about a menu.',
                'model'       => Menu::class,
            ],
            [
                'name'        => 'Delete menu',
                'slug'        => 'delete-menu',
                'description' => 'Delete menu permission is a right that allows users to delete a menu.',
                'model'       => Menu::class,
            ],
            [
                'name'        => 'Show menu',
                'slug'        => 'show-menu',
                'description' => 'Show menu is permission to access detailed information of a menu.',
                'model'       => Menu::class,
            ],
            [
                'name'        => 'Show list menu',
                'slug'        => 'show-list-menu',
                'description' => 'Show list menu permission grants access to the list of companies in the system',
                'model'       => Company::class,
            ],
        ], ['name']);
    }
}
