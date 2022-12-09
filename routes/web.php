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

$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('/register', ['uses' => 'AuthController@register']);
    $router->post('/login', ['uses' => 'AuthController@login']);
});

$router->group(['prefix' => 'prodi'], function () use ($router) {
    $router->get('/', ['uses' => 'ProdiController@getAll']);
});

$router->group(['prefix' => 'matakuliah'], function () use ($router) {
    $router->get('/', ['uses' => 'MatakuliahController@getAll']);
});

$router->group(['middleware' => 'jwt.auth'], function () use ($router) {
    $router->group(['prefix' => 'krs'], function () use ($router) {
        $router->post('/{mkid}', ['uses' => 'KrsController@addMatkul']);
        $router->put('/{mkid}', ['uses' => 'KrsController@deleteMatkul']);
    });
});

$router->group(['prefix' => 'mahasiswa'], function () use ($router) {
    $router->get('/', ['uses' => 'MahasiswaController@getall']);
    $router->group(['middleware' => 'jwt.auth'], function () use ($router) {
        $router->get('/profile', ['uses' => 'MahasiswaController@getMe']);
    });
    $router->get('/{nim}', ['uses' => 'MahasiswaController@getByNim']);
});
