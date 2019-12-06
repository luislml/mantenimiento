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
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('usuarios', 'UsuarioController');

Route::resource('eInformaticos', 'E_informaticoController');
route::post('eInformaticos/equipos', ['as'=>'eInformaticos.equipo', 'uses'=>'E_informaticoController@equipo']);
route::post('eInformaticos/modelos', ['as'=>'eInformaticos.modelo', 'uses'=>'E_informaticoController@modelo']);
route::post('eInformaticos/marcas', ['as'=>'eInformaticos.marca', 'uses'=>'E_informaticoController@marca']);
Route::Get('eInformaticos/getareas/{id}', 'E_informaticoController@getareas');
Route::Get('eInformaticos/getsubareas/{id}', 'E_informaticoController@getsubareas');
Route::Get('eInformaticos/getusuarios/{id}', 'E_informaticoController@getusuarios');
Route::Get('eInformaticos/getusuariosa/{id}', 'E_informaticoController@getusuariosa');
Route::Get('eInformaticos/getusuariossa/{id}', 'E_informaticoController@getusuariossa');


//unidades
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









Route::resource('equipounidads', 'EquipounidadController');
route::get('equipounidadsinsert', ['as'=>'equipounidads.equipoinsert', 'uses'=>'EquipounidadController@editt']); 
route::post('equipounidadsupdate', ['as'=>'equipounidads.equipoupdate', 'uses'=>'EquipounidadController@updatee']);
Route::Get('getareas/{id}', 'EquipounidadController@getareas');
Route::Get('getsubareas/{id}', 'EquipounidadController@getsubareas');
Route::Get('equipounidads/{d}/getusuarios/{id}', 'EquipounidadController@getusuarios');
Route::Get('equipounidads/{d}/getusuarios_a/{id}', 'EquipounidadController@getusuarios_a');
Route::Get('equipounidads/{d}/getusuarios_sa/{id}', 'EquipounidadController@getusuarios_sa');
Route::Get('equipounidads/get_equipos/{id}', 'EquipounidadController@getequipos');
Route::Get('equipounidads/getequipos_a/{id}', 'EquipounidadController@getequipos_a');
Route::Get('equipounidads/getequipos_sa/{id}', 'EquipounidadController@getequipos_sa');
Route::Get('equipounidads/{d}/areas/{id}', 'EquipounidadController@getareas_a');
Route::Get('equipounidads/{d}/subareas/{id}', 'EquipounidadController@getsubareas_a');
route::get('equipounidads/{equipou}/editestado', ['as'=>'equipounidads.editestado', 'uses'=>'EquipounidadController@editestado']);
route::post('equipounidads/print', ['as'=>'equipounidads.print', 'uses'=>'EquipounidadController@print']);


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
Route::Get('userequipos/getusuariose/{id}', 'UserequipoController@getusuariose');
//Route::Get('/imprimirrr', 'UserequipoController@imprimir')->name('qr');
Route::Get('userequipos/hmantenimiento/{id}', 'UserequipoController@hmantenimiento');



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
Route::Get('/imprimirr', 'MantenimientoController@imprimir');
route::Get('mantenimientos/{id}/cite', ['as'=>'mantenimientos.solocite', 'uses'=>'MantenimientoController@solocite']);




Route::resource('cites', 'CiteController');
route::post('cites', ['as'=>'gestion.update', 'uses'=>'CiteController@gestion']);
route::get('cerrar', ['as'=>'gestion.cerrar', 'uses'=>'CiteController@cerrargestion']);
route::get('citesx', ['as'=>'cites.indexc', 'uses'=>'CiteController@indexc']);



//observaciones

Route::resource('observacions', 'ObservacionController');
route::get('observacion/{observacion}', ['as'=>'observacions.indexid', 'uses'=>'ObservacionController@indexid']);
route::get('create/{observacion}', ['as'=>'observacions.create', 'uses'=>'ObservacionController@create']);

//recomendaciones

Route::resource('recomendacions', 'RecomendacionController');
route::get('recomendacions/{recomendacion}', ['as'=>'recomendacions.indexid', 'uses'=>'RecomendacionController@index']);
route::get('rcreate/{recomendacion}', ['as'=>'recomendacions.create', 'uses'=>'RecomendacionController@create']);

Route::get('/imprimir', 'RecomendacionController@imprimir')->name('print');


Route::resource('equipos', 'EquipoController');

Route::resource('modelos', 'ModeloController');

Route::resource('marcas', 'MarcaController');

Route::resource('historiales', 'HistorialeController');


Route::resource('cronogramas', 'CalendarController');
//rutA fullcalendar
Route::get('cargaEventos{id?}','CalendarController@index1');
Route::post('guardaEventos', array('as' => 'guardaEventos','uses' => 'CalendarController@create'));
Route::post('actualizaEventos','CalendarController@update');
Route::post('eliminaEvento','CalendarController@delete');
route::post('cronograma', ['as'=>'cronograma.print', 'uses'=>'CalendarController@print']);


Route::resource('programas', 'programaController');
Route::get('descargar_programa/{id}', 'programaController@descargar_programa');

Route::resource('actualizadors', 'actualizadorController');
Route::get('descargar_actualizador/{id}', 'actualizadorController@descargar_actualizador');