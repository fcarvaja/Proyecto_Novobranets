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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('mapasMenu','FacultadController@menu');
Route::post('facultadsM', 'FacultadController@indexMapa')->name('facultadsM');
Route::get('/perfil', 'AlumnoController@perfilAlumno')->name('perfil');
Route::get('/editPerfil', 'AlumnoController@editPerfil')->name('editPerfil');
Route::post('/perfil', 'AlumnoController@update_avatar')->name('perfil');
Route::get('sanciones', 'AlumnoController@sanciones')->name('sanciones');
Route::get('/alumno', 'AlumnoController@indexAlumno')->name('alumno'); //Me dirige al controlador y luego al metodo indexAlumno
Route::get('/perfil/image', 'AlumnoController@postNewImage')->name('imagen');
Route::get('sancionsF', 'SancionController@indexSancion' );
Route::get('actividads', 'ActividadController@index')->name('actividads.index');
Route::post('actividads', 'ActividadController@addEvent')->name('actividads.add');
Route::resource('alumnos', 'AlumnoController');
Route::resource('cursos', 'CursoController');
Route::resource('tipoActividades', 'TipoActividadController');
Route::resource('estadoActividades', 'EstadoActividadController');
Route::resource('profesores', 'ProfesorController');
Route::resource('actividades', 'ActividadController');
Route::resource('facultads', 'FacultadController');
Route::resource('escuelas', 'EscuelaController');
Route::resource('admin', 'AdminController');
Route::resource('sancions', 'SancionController');

