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

Route::group(['middleware' => ['auth']], function(){

	Route::get('/home', 'HomeController@index');

	Route::resource('users','UserController');

	Route::get('roles',[
		'as'=>'roles.index',
		'uses'=>'RoleController@index',
		'middleware' => ['permission:admin|role-list|role-create|role-edit|role-delete']
	]);
	Route::get('roles/create',[
		'as'=>'roles.create',
		'uses'=>'RoleController@create',
		'middleware' => ['permission:admin|role-create']
	]);
	Route::post('roles/create',[
		'as'=>'roles.store',
		'uses'=>'RoleController@store',
		'middleware' => ['permission:admin|role-create']
	]);
	Route::get('roles/{id}',[
		'as'=>'roles.show',
		'uses'=>'RoleController@show'
	]);
	Route::get('roles/{id}/edit',[
		'as'=>'roles.edit',
		'uses'=>'RoleController@edit',
		'middleware' => ['permission:admin|role-edit']
	]);
	Route::patch('roles/{id}',[
		'as'=>'roles.update',
		'uses'=>'RoleController@update',
		'middleware' => ['permission:admin|role-edit']]);
	Route::delete('roles/{id}',[
		'as'=>'roles.destroy',
		'uses'=>'RoleController@destroy',
		'middleware' => ['permission:admin|role-delete']]);


	Route::get('trips',[
		'as'=>'trips.index',
		'uses'=>'TripController@index',
		'middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);

	Route::get('trips/create',[
		'as'=>'trips.create',
		'uses'=>'TripController@create',
		'middleware' => ['permission:item-create']]);

	Route::post('trips/create',[
		'as'=>'trips.store',
		'uses'=>'TripController@store',
		'middleware' => ['permission:item-create']]);

	Route::get('trips/{id}',
		['as'=>'trips.show',
		'uses'=>'TripController@show']);

	Route::get('trips/{id}/edit',
		['as'=>'trips.edit',
		'uses'=>'TripController@edit',
		'middleware' => ['permission:item-edit']]);

	Route::patch('trips/{id}',
		['as'=>'trips.update',
		'uses'=>'TripController@update',
		'middleware' => ['permission:item-edit']]);

	Route::delete('trips/{id}',[
		'as'=>'trips.destroy',
		'uses'=>'TripController@destroy',
		'middleware' => ['permission:item-delete']]);
});

