<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/hello', [
    'middleware' => 'default',
    'uses' => 'ExampleController@sayHello'
]);


$router->post('/api/auth/login', [
    'middleware' => 'default',
    'uses' =>  'Auth\AuthController@login'
]);


$router->get('/api/photo', [
        'middleware' => 'jwt',
        'uses'=> 'PhotoController@getPhoto'
]);


$router->get('api/photo/{albumId}', [
        'middleware' => 'jwt',
        'uses' => 'PhotoController@photoDetail'
]);
