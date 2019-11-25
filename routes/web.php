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

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'PublicController@index');
    Route::get('/dev', 'PublicController@dev');
    Route::get('pasar', 'PublicController@pasar')->name('pasar');
    Route::get('pasar/{id}', 'PublicController@pasar_show')->name('pasar_show');
    Route::get('komoditi', 'PublicController@komoditi')->name('komoditi');
    Route::get('rapat', 'PublicController@rapat')->name('rapat');
    Route::get('saran', 'PublicController@saran')->name('saran');
    Route::get('ikm-ukm', 'PublicController@ikmUkm')->name('ikm-ukm');
    Route::get('grafik-pad', 'PublicController@grafik_pad')->name('grafik-pad');
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
        Route::resource('bakulan', 'Admin\BakulanController', ['as' => 'admin']);

        Route::resource('komoditi', 'Admin\KomoditiController', ['as' => 'admin']);
        Route::resource('ikm', 'Admin\IkmController', ['as' => 'admin']);
        Route::resource('ukm', 'Admin\UkmController', ['as' => 'admin']);
        Route::resource('rapat', 'Admin\RapatController', ['as' => 'admin']);
        Route::resource('saran', 'Admin\SaranController', ['as' => 'admin']);

        Route::resource('users', 'Admin\UsersController', ['as' => 'admin']);

        Route::group(['prefix' => 'laporan'], function () {
            Route::get('grafik_pad', 'Admin\LaporanController@grafik_pad')->name('admin.laporan.grafik_pad');
            Route::get('lainnya', 'Admin\LaporanController@lainnya')->name('admin.laporan.lainnya');
            Route::get('download', 'Admin\LaporanController@download')->name('admin.laporan.download');
        });
    });
});

