<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group([
    'namespace' => 'AdminApi',
    'prefix'=>'admin_api'
], function () use ($router){
    $router->get('login','AuthController@login');
//    $router->post('login','AuthController@login');

    $router->group([
        'middleware' => 'auth:adminApi'
    ],function () use ($router) {
        $router->get('user/list','UserController@list');
    });
});



$router->group([
    'namespace' => 'Api',
    'prefix'=>'api'
], function () use ($router){
    $router->get('login','AuthController@login');
    $router->group([
        'middleware' => 'auth:api'
    ],function () use ($router) {
        $router->get('member/list','MemberController@list');
    });
});

