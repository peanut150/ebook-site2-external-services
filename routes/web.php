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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->get('/logs', ['uses' => 'AuthenticationLogController@getLogs']);
$router->get('/logs', 'AuthenticationLogController@index');
$router->get('/logs/{id}', 'AuthenticationLogController@show');
$router->delete('/logs/{id}', 'AuthenticationLogController@delete');
$router->post('/logs', 'AuthenticationLogController@add');