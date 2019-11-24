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

$router->get('/debug_controller', 'DebugController@index');
$router->get('/debug_closure', function (\Illuminate\Http\Request $request, \LIQRGV\QueryFilter\RequestParser $requestParser) use ($router) {
    $exploded = explode("/", $request->getRequesturi());
    $lastURISegment = current(explode("?", strtolower(end($exploded)), 2));
    $camelizeURI = str_replace('_', '', ucwords($lastURISegment, '_'));
    dd($camelizeURI, $request, $request->route(), $requestParser->getBuilder()->toSql());
});
$router->get('/attendance', 'AttendanceController@index');
$router->get('/example1', function (\Illuminate\Http\Request $request) use ($router) {
    dd(
        \App\Models\Course::first()->schedules()->toSql(),
        \App\Models\Course::first()->schedules,
        \App\Models\Programme::first()->courses()->toSql(),
        \App\Models\Programme::first()->courses,
        \App\Models\Schedule::first()->lectureTime()->toSql(),
        \App\Models\Schedule::first()->lectureTime,
        \App\Models\Schedule::first()->course()->toSql(),
        \App\Models\Schedule::first()->course,
        \App\Models\Student::first()->attendances()->toSql(),
        \App\Models\Student::first()->attendances()->getBindings(),
        \App\Models\Student::first()->attendances,
        \App\Models\Teacher::first()->attendances()->toSql(),
        \App\Models\Teacher::first()->attendances()->getBindings(),
        \App\Models\Teacher::first()->attendances,
        \App\Models\Attendance::first()->subjects
    );
});
