<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('usuarios', 'UsuarioController');

Route::resource('eInformaticos', 'E_informaticoController');

Route::resource('unidads', 'UnidadController');



Route::resource('areas', 'AreaController');
route::get('areass/{id?}', ['as'=>'areass.indexx', 'uses'=>'AreaController@indexx']);
route::get('areas/create/{id?}', ['as'=>'areas.createe', 'uses'=>'AreaController@create']);



Route::resource('subAreas', 'Sub_AreaController');
route::get('subAreass/{id?}', ['as'=>'subAreass.indexx', 'uses'=>'Sub_AreaController@indexx']);
route::get('subAreas/create/{id?}', ['as'=>'subAreas.createe', 'uses'=>'Sub_AreaController@create']);



Route::resource('personafs', 'personafController');
route::get('persona', ['as'=>'personales.creat', 'uses'=>'PersonafController@create']);
Route::get('/areas', 'AreaController@getCareers');
Route::get('/subarea', 'Sub_AreaController@getsubarea');
route::get('perso', ['as'=>'person.crea', 'uses'=>'PersonafController@editt']);
route::post('person', ['as'=>'person.updat', 'uses'=>'PersonafController@updatee']);




Route::resource('listarUas', 'Listar_uasController');