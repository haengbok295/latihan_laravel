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
	return view('/auth/login');
});

//Route::get('hello', 'HelloController@index')->name('hello.index');

Route::get('test', 'TestController@test')->name('test');

//Route::get('login', 'LoginController@login')->name('login');

Route::get('blank', 'TestController@blank')->name('blank');

Route::get('chart', function(){
	return view('chart');
})->name('chart');

Route::get('animations', function(){
	return view('animations');
})->name('animations');

Route::get('preloaders', function(){
	return view('preloaders');
})->name('preloaders');



Route::get('test_store', function(){
	//select data
	//$store = \App\store::limit(10)->get();

	//die and dump
	// dd($store);

	//insert data
	$data = [
		'store_id' => 1,
		'first_name' => 'Lorem',
		'last_name' => 'Ipsum',
		'email' => 'lorem@ipsum.com',
		'address_id' => 1,
		'active' => '1'
	];

	\App\SakilaModel::create($data);

	// insert

	$c = new \App\SakilaModel();
	$c->store_id = '1';
	$c->first_name = 'Selamat';
	$c->last_name = 'Siang';
	$c->email = 'selamat@siang.com';
	$c->address_id = '1';
	$c->active = '1';
	$c->save();

	return "sukses";

	Route::get('table', function(){
	return view('table');
	})->name('table');
});

Route::get('customer', 'SakilaController@customer');

Route::put('test_create','SakilaController@tambah')->name('create');

Route::put('test_update/{customer_id}','SakilaController@update')->name('update');

Route::get('test_delete/{customer_id}','SakilaController@delete')->name('delete');

Route::get('join_store_to_customer','TestController@join_store_to_customer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
