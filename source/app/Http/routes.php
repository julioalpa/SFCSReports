<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'auth'] , function (){
    Route::get('/', [
        'uses' => 'HomeController@index',
        'middleware' => 'role:admin',
        'as' => 'home_show_path'
    ]);

    Route::post('/', [
        'uses' => 'HomeController@store',
        'as' => 'home_store_path'
    ]);

    Route::get('/monitor', [
        'uses' => 'MonitoresController@index',
        'middleware' => 'role:admin',
        'as' => 'monitores_show_path'
    ]);

    Route::post('/monitor', [
        'uses' => 'MonitoresController@store',
        'middleware' => 'role:admin',
        'as' => 'monitores_store_path'
    ]);

    Route::get('/grafico', [
        'uses' => 'GraficosController@index',
        'middleware' => 'role:admin',
        'as' => 'grafico_show_path'
    ]);

    Route::get('/historico', [
        'uses' => 'HistoricoController@index',
        'middleware' => 'role:admin',
        'as' => 'historico_show_path'
    ]);
});

Route::get('auth/login', [
    'uses' => 'AuthController@index',
    'as'   => 'auth_show_path'
]);

Route::post('auth/login', [
    'uses' => 'AuthController@store',
    'as'   => 'auth_store_path'
]);

Route::get('auth/logout', [
    'uses' => 'AuthController@destroy',
    'as'   => 'auth_destroy_path'
]);

Route::get('linea/dropdown/{id}', [
    'uses' => 'LineaController@dropdownByPlanta',
    'as' => 'dropTest'
]);

Route::get('trazabilidad/production/line/{date}/{id}', [
    'uses' => 'TrazabilidadController@getProductionByLine',
    'as' => 'getProductionByLine'
]);

Route::get('trazabilidad/production/plant/{date}/{id}', [
    'uses' => 'TrazabilidadController@getProductionByPlant',
    'as' => 'getProductionByPlant'
]);

Route::get('trazabilidadMotorola/production/line/{date}/{id}', [
    'uses' => 'TrazabilidadMotorolaController@getProductionByLine',
    'as' => 'getMotorolaProductionByLine'
]);

Route::get('trazabilidadMotorola/production/plant/{date}/{id}', [
    'uses' => 'TrazabilidadMotorolaController@getProductionByPlant',
    'as' => 'getMotorolaProductionByPlant'
]);