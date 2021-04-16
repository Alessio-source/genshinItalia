<?php

use Illuminate\Support\Facades\Route;
use App\news;
use App\Streammers;

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
    $streammers = Streammers::all();
    return view('homepage', compact('news', 'streammers'));
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
        Route::get('characters/info/{id}', 'InfoCharactersController@create')->name('info.create');
        Route::post('characters/info/{id}', 'InfoCharactersController@store')->name('info.store');
        Route::get('characters/info/{info}/edit', 'InfoCharactersController@edit')->name('info.edit');
        Route::get('characters/info/{info}', 'InfoCharactersController@update')->name('info.update');
        Route::resource('streammer', 'StreammerController');

    });

