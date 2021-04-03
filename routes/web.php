<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('dashboard')
    ->middleware('auth')
    ->name('dashboard.')
    ->group( function () {

        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('/dashboard/news', 'NewsController');

    });

