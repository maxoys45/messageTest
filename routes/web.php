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

Route::group(['middleware' => ['web']], function () {

	Auth::routes();

	Route::get('/', function () {
		if (Auth::check()) {
			return redirect('home');
		}
	    return view('auth.login');
	});

});

Route::group(['middleware' => ['auth']], function () {

	Route::get('/create-a-new-note', 'PagesController@getCreate');

	Route::post('/create/submit', 'NotesController@submit');

});

Route::get('/home', 'HomeController@index')->name('home');
