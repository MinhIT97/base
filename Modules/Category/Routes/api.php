<?php

use Modules\Category\Http\Controllers\Admin\CategoryController;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->group(['prefix' => 'v1/admin/categories', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->post('/', [CategoryController::class, 'store']);
        $api->get('/', [CategoryController::class, 'index']);
        $api->get('/{id}', [CategoryController::class, 'show']);
        $api->patch('/{id}', [CategoryController::class, 'update']);
        $api->delete('/{id}', [CategoryController::class, 'destroy']);
    });
});
