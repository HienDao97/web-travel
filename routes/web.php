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

Route::get('/', 'CtvController@home')->name('ctv.home.view');
Route::group(['middleware' => ['web'], 'prefix' => 'ctv'], function()
{
    Route::get('/login', 'CtvController@login')->name('ctv.login.view');
    Route::get('/forgot_password', 'CtvController@forgotPassword')->name('ctv.forgotPassword.view');
    Route::get('/register', 'CtvController@register')->name('ctv.register.view');
    Route::post('/store/register', 'CtvController@storeRegister')->name('ctv.register');
    Route::post('/store/login', 'CtvController@loginPost')->name('ctv.login');
    Route::group(['middleware' => ['apartners.auth']], function () {
        Route::get('/info', 'CtvController@info')->name('ctv.info.view');
        Route::get('/order', 'CtvController@order')->name('ctv.order.view');
        Route::get('register-time', 'CtvController@registerTime')->name('ctv.register_time.view');
        Route::get('/change-password', 'CtvController@changePassword')->name('ctv.change_password.view');
    });
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
