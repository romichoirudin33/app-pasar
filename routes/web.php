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

Route::match(['get', 'post'], 'register', function () {
    return redirect('/');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('pasar', 'Admin\PasarController', ['as' => 'admin']);
        Route::resource('gambar-pasar', 'Admin\GambarPasarController', ['as' => 'admin']);

        Route::resource('komoditi', 'Admin\KomoditiController', ['as' => 'admin']);
        Route::resource('ikm', 'Admin\IkmController', ['as' => 'admin']);
        Route::resource('ukm', 'Admin\UkmController', ['as' => 'admin']);
        Route::resource('rapat', 'Admin\RapatController', ['as' => 'admin']);
        Route::resource('saran', 'Admin\SaranController', ['as' => 'admin']);

        Route::resource('users', 'Admin\UsersController', ['as' => 'admin']);
    });
});

