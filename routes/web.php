<?php

use Illuminate\Support\Facades\Route;
use App\news;

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
    $news = News::all();
    return view('homepage', compact('news'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('build', 'BuildController');


Route::prefix('dashboard')
    ->middleware('auth')
    ->name('dashboard.')
    ->group( function () {

        Route::get('/', 'DashboardController@index')->name('index');
        Route::resource('news', 'NewsController');
        Route::resource('characters', 'CharactersController');
        Route::resource('characters/info', 'CharactersController');

    });

