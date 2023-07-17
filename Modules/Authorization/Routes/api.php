<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

use Modules\Authorization\Http\Controllers\Admin\PermissionController;
use Modules\Authorization\Http\Controllers\Admin\PermissionRelationShipController;
use Modules\Authorization\Http\Controllers\Admin\RoleController;
use Modules\Authorization\Http\Controllers\Admin\RoleRelationShipController;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin/roles', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [RoleController::class, 'list']);
        $api->post('/', [RoleController::class, 'store']);
        $api->get('/{id}', [RoleController::class, 'show']);
        $api->patch('/{id}', [RoleController::class, 'update']);
        $api->delete('/{id}', [RoleController::class, 'destroy']);
        $api->post('/{id}/permissions/attach', [RoleRelationShipController::class, 'attachPermissions']);
        $api->post('/{id}/permissions/detach', [RoleRelationShipController::class, 'detachPermissions']);
        $api->post('/{id}/permissions/sync', [RoleRelationShipController::class, 'syncPermissions']);
    });
});
$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin/permissions', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [PermissionController::class, 'list']);
        $api->get('/{id}', [PermissionController::class, 'show']);
        $api->post('/{id}/roles/attach', [PermissionRelationShipController::class, 'attachRole']);
        $api->post('/{id}/roles/detach', [PermissionRelationShipController::class, 'detachRole']);
        $api->post('/{id}/roles/sync', [PermissionRelationShipController::class, 'syncRole']);
    });
});
