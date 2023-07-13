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

use Modules\Menu\Http\Controllers\Admin\ItemMenuController;
use Modules\Menu\Http\Controllers\Admin\MenuController;
use Modules\Menu\Http\Controllers\Admin\TypeMenuController;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin/menu-types', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [TypeMenuController::class, 'index']);

    });

    $api->group(['prefix' => 'v1/admin/menus', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [MenuController::class, 'index']);
        $api->post('/', [MenuController::class, 'store']);
        $api->get('/{id}', [MenuController::class, 'show']);
        $api->patch('/{id}', [MenuController::class, 'update']);
        $api->delete('/{id}', [MenuController::class, 'destroy']);
    });

    $api->group(['prefix' => 'v1/admin/item-menus', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [ItemMenuController::class, 'index']);
        $api->post('/', [ItemMenuController::class, 'store']);
        $api->get('/{id}', [ItemMenuController::class, 'show']);
        $api->patch('/{id}', [ItemMenuController::class, 'update']);
        $api->delete('/{id}', [ItemMenuController::class, 'destroy']);
    });
});
