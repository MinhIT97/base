<?php

use Modules\Product\Http\Controllers\Admin\ProductController;

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
    $api->group(['prefix' => 'v1/admin/products', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->post('/', [ProductController::class, 'store']);
        $api->get('/', [ProductController::class, 'index']);
        $api->get('/{id}', [ProductController::class, 'show']);
        $api->patch('/{id}', [ProductController::class, 'update']);
        $api->delete('/{id}', [ProductController::class, 'destroy']);
    });
});
