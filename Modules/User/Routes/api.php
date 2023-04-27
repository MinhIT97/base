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

use Modules\User\Http\Controllers\Admin\AuthController;
use Modules\User\Http\Controllers\Admin\UserRelationShipController;
use Modules\User\Http\Controllers\User\AuthController as UserAuthController;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'users'], function ($api) {
        $api->post('/register', [UserAuthController::class, 'store']);
    });
});

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'users', 'middleware' => 'api'], function ($api) {
        $api->post('login', [UserAuthController::class, 'login']);
        $api->get('me', [UserAuthController::class, 'me']);
    });
});

//admin
$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin/users', 'middleware' => ['jwt', 'api']], function ($api) {
        $api->post('/', [AuthController::class, 'store']);
        $api->get('/me', [AuthController::class, 'me']);
        $api->post('/{id}/roles/attach', [UserRelationShipController::class, 'attachRole']);
        $api->post('/{id}/roles/detach', [UserRelationShipController::class, 'detachRole']);
        $api->post('/{id}/roles/sync', [UserRelationShipController::class, 'syncRole']);
    });
});
$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin', 'middleware' => ['api']], function ($api) {
        $api->post('login', [AuthController::class, 'login']);

    });
});
