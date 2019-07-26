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
route::get('perso', ['as'=>'person.crea', 'uses'=>'PersonafController@editt']);
route::post('person', ['as'=>'person.updat', 'uses'=>'PersonafController@updatee']);
Route::Get('personafs/{d}/areas/{id}', 'personafController@getareas_a');
Route::Get('personafs/{d}/subareas/{id}', 'personafController@getsubareas_a');
Route::Get('productByCategory/{id}', 'personafController@byFoundation');
Route::Get('getsubareas/{id}', 'personafController@getsubareas'); 
route::get('personafs/{personaf}/editestado', ['as'=>'personafs.editestado', 'uses'=>'PersonafController@editestado']);




Route::resource('listarUas', 'Listar_uasController');




Route::resource('equipounidads', 'EquipounidadController');
route::get('equipounidadsinsert', ['as'=>'equipounidads.equipoinsert', 'uses'=>'EquipounidadController@editt']);
route::post('equipounidadsupdate', ['as'=>'equipounidads.equipoupdate', 'uses'=>'EquipounidadController@updatee']);
Route::Get('getareas/{id}', 'EquipounidadController@getareas');
Route::Get('getsubareas/{id}', 'EquipounidadController@getsubareas');
Route::Get('equipounidads/{d}/areas/{id}', 'EquipounidadController@getareas_a');
Route::Get('equipounidads/{d}/subareas/{id}', 'EquipounidadController@getsubareas_a');
route::get('equipounidads/{equipou}/editestado', ['as'=>'equipounidads.editestado', 'uses'=>'EquipounidadController@editestado']);


Route::resource('userequipos', 'UserequipoController');
//rutas de las peticiones de seleccion usuario - equipo
Route::Get('userequipos/getareas/{id}', 'UserequipoController@getareas');
Route::Get('userequipos/getsubareas/{id}', 'UserequipoController@getsubareas');
Route::Get('userequipos/getusuarios/{id}', 'UserequipoController@getusuarios');
Route::Get('userequipos/getequipos/{id}', 'UserequipoController@getequipos');
Route::Get('userequipos/getusuariosa/{id}', 'UserequipoController@getusuariosa');
Route::Get('userequipos/getequiposa/{id}', 'UserequipoController@getequiposa');
Route::Get('userequipos/getusuariossa/{id}', 'UserequipoController@getusuariossa');
Route::Get('userequipos/getequipossa/{id}', 'UserequipoController@getequipossa');



Route::resource('herramientas', 'HerramientasController');
Route::get('descargar_publicacion/{id}', 'HerramientasController@descargar_publicacion');





Route::resource('mantenimientos', 'MantenimientoController');
//rutas de las peticiones de seleccion mantenimiento
Route::Get('mantenimientos/getareas/{id}', 'MantenimientoController@getareas');
Route::Get('mantenimientos/getsubareas/{id}', 'MantenimientoController@getsubareas');
Route::Get('mantenimientos/getusuarios/{id}', 'MantenimientoController@getusuarios');
Route::Get('mantenimientos/getequipos/{id}', 'MantenimientoController@getequipos');
//rutas update
Route::Get('mantenimientos/getusuariosa/{id}', 'MantenimientoController@getusuariosa');
Route::Get('mantenimientos/getequiposa/{id}', 'MantenimientoController@getequiposa');
Route::Get('mantenimientos/getusuariossa/{id}', 'MantenimientoController@getusuariossa');
Route::Get('mantenimientos/getequipossa/{id}', 'MantenimientoController@getequipossa');

Route::resource('cites', 'CiteController');
route::post('cites', ['as'=>'gestion.update', 'uses'=>'CiteController@gestion']);
route::get('cerrar', ['as'=>'gestion.cerrar', 'uses'=>'CiteController@cerrargestion']);



//observaciones

Route::resource('observacions', 'ObservacionController');
route::get('observacion/{observacion}', ['as'=>'observacions.indexid', 'uses'=>'ObservacionController@indexid']);
route::get('create/{observacion}', ['as'=>'observacions.create', 'uses'=>'ObservacionController@create']);

//recomendaciones

Route::resource('recomendacions', 'RecomendacionController');
route::get('recomendacions/{recomendacion}', ['as'=>'recomendacions.indexid', 'uses'=>'RecomendacionController@index']);
route::get('rcreate/{recomendacion}', ['as'=>'recomendacions.create', 'uses'=>'RecomendacionController@create']);
