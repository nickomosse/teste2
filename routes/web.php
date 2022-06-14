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

Route::get('/', 'HomeController@index')->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'Auth\HomeController@index')->name('home');






    Route::prefix('admin')->group(function () {
        Route::get('/', 'Auth\Admin\HomeController@index')->name('home.index');

        Route::get('/servicetypes', 'Auth\Admin\ServiceTypeController@index')->name('servicetypes.index');
        Route::get('/servicetypes/create', 'Auth\Admin\ServiceTypeController@create')->name('servicetypes.create');
        Route::post('/servicetypes/store', 'Auth\Admin\ServiceTypeController@store')->name('servicetypes.store');
        Route::get('/servicetypes/edit/{id}', 'Auth\Admin\ServiceTypeController@edit')->name('servicetypes.edit');
        Route::put('/servicetypes/update/{id}', 'Auth\Admin\ServiceTypeController@update')->name('servicetypes.update');
        Route::get('/servicetypes/show/{id}', 'Auth\Admin\ServiceTypeController@show')->name('servicetypes.show');
        Route::delete('/servicetypes/delete/{id}', 'Auth\Admin\ServiceTypeController@destroy')->name('servicetypes.destroy');

        Route::get('/services', 'Auth\Admin\ServiceController@index')->name('services.index');
        Route::get('/service/create', 'Auth\Admin\ServiceController@create')->name('services.create');
        Route::post('/service/store', 'Auth\Admin\ServiceController@store')->name('services.store');
        Route::get('/service/edit/{id}', 'Auth\Admin\ServiceController@edit')->name('services.edit');
        Route::put('/service/update/{id}', 'Auth\Admin\ServiceController@update')->name('services.update');
        Route::get('/service/show/{id}', 'Auth\Admin\ServiceController@show')->name('services.show');
        Route::delete('/service/delete/{id}', 'Auth\Admin\ServiceController@destroy')->name('services.destroy');
    });
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/authenticate', 'Auth\LoginController@authenticate')->name('authenticate');

Route::any('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/save', 'Auth\RegisterController@save')->name('save');
