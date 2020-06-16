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
Route::get('/login', 'ConnectController@loginindex')->name('login');
Route::post('/login', 'ConnectController@postlogin')->name('login');

Route::get('/register', 'ConnectController@registerindex')->name('register');
Route::post('/register', 'ConnectController@postregister')->name('register');
Route::get('/logout', 'ConnectController@getlogout')->name('logout');


Route::middleware(['auth', 'admin', 'userbaneado'])->prefix('admin')->namespace('Admin')->group(function () {
	Route::get('/products', 'ProductControllerhernandez@index')->name('products_list');  //listar
//Route::get('/products/create', 'ProductControllerhernandez@create'); //formulario
//Route::Post('/products', 'ProductControllerhernandez@store'); //registrar

//Route::get('/products/{id}/edit', 'ProductControllerhernandez@edit');//formulario edicion
//Route::Post('/products/{id}/edit', 'ProductControllerhernandez@update'); //actualizar

//Route::delete('/products/{id}', 'ProductControllerhernandez@destroy');//formulario eliminar
Route::get('/users/{permissionid}/permissions', 'UserControllerhernandez@getpermissions')->name('users_form_permission');//formulario permisos
Route::post('/users/{permissionuserid}/permissions', 'UserControllerhernandez@postpermissions')->name('users_form_permission');




	Route::get('/categories', 'CategoryControllerhernandez@index')->name('categories_list');  //listar


	Route::get('/users', 'UserControllerhernandez@index')->name('users_list');  //listar
	Route::get('/users/{userid}/edit', 'UserControllerhernandez@edit')->name('users_form_edit');//formulario edicion
	Route::get('/users/{usershowid}/show', 'UserControllerhernandez@show')->name('users_form_show');//formulario para ver
	Route::get('/users/{bannerid}/banned', 'UserControllerhernandez@banned')->name('users_banned');//suspender o bannear usuario



    
});