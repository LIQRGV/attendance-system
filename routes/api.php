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

// we need this to allow PHPStorm performing autocomplete
if(!$router instanceof \Laravel\Lumen\Routing\Router) {
    throw new Exception("Router is not lumen router");
}

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/attendance', 'AttendanceController@index');
