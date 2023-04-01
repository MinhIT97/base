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

use Modules\Authorization\Http\Controllers\PermissionController;
use Modules\Authorization\Http\Controllers\RoleController;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/roles', 'middleware' => 'api'], function ($api) {
        $api->get('/', [RoleController::class, 'list']);
        $api->post('/', [RoleController::class, 'store']);
        $api->get('/{id}', [RoleController::class, 'show']);
        $api->delete('/{id}', [RoleController::class, 'destroy']);
    });
});
$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/permissions', 'middleware' => 'api'], function ($api) {
        $api->get('/', [PermissionController::class, 'list']);
        $api->get('/{id}', [PermissionController::class, 'show']);
    });
});
