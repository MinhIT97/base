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

use Modules\Menu\Http\Controllers\Admin\MenuController;
use Modules\Menu\Http\Controllers\Admin\MenuTypeController;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin/menu-types', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [MenuTypeController::class, 'index']);

    });

    $api->group(['prefix' => 'v1/admin/menus', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->get('/', [MenuTypeController::class, 'index']);
        $api->post('/', [MenuController::class, 'store']);

    });
});
