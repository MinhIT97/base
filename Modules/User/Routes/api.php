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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'users'], function ($api) {
        $api->post('/register', 'Modules\User\Http\Controllers\User\AuthController@store');
    });
});

$api->version('v1', function ($api) {

    $api->group(['prefix' => 'users', 'middleware' => 'api'], function ($api) {
        $api->post('login', 'Modules\User\Http\Controllers\User\AuthController@login');
        $api->get('me', 'Modules\User\Http\Controllers\User\AuthController@me');
    });
});

$api->version('v1', function ($api) {
    $api->group(['prefix' => 'v1/admin', 'middleware' => 'api'], function ($api) {
        $api->post('login', 'Modules\User\Http\Controllers\Admin\AuthController@login');
        $api->post('/users', 'Modules\User\Http\Controllers\Admin\AuthController@store');
    });
});
