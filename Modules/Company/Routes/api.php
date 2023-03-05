<?php

use Modules\Company\Http\Controllers\CompanyController;

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

    $api->group(['prefix' => 'v1/companies', 'middleware' => 'api'], function ($api) {
        $api->post('/', [CompanyController::class, 'store']);
        $api->get('/', [CompanyController::class, 'index']);
        $api->get('/{id}', [CompanyController::class, 'show']);
        $api->put('/{id}', [CompanyController::class, 'update']);
        $api->delete('/{id}', [CompanyController::class, 'destroy']);
    });
});
