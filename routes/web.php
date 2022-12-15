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
    return view('main');
})->name('home');

Route::get('/register', 'App\Http\Controllers\AuthController@registerPage');
Route::post('/register', 'App\Http\Controllers\AuthController@registration')->name('registration');
Route::get('/login', 'App\Http\Controllers\AuthController@loginPage');
Route::post('/login', 'App\Http\Controllers\AuthController@login')->name('login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::post('/user_request/callRequest', 'App\Http\Controllers\UserRequestsController@callRequest')->name('user_request.callRequest');
Route::post('/user_request/questionRequest', 'App\Http\Controllers\UserRequestsController@questionRequest')->name('user_request.questionRequest');
Route::post('/user_request/messageRequest', 'App\Http\Controllers\UserRequestsController@messageRequest')->name('user_request.messageRequest');

Route::get('/{category_slug}', 'App\Http\Controllers\ArticleController@index')->name('article.index');
Route::get('/{category_slug}/create', 'App\Http\Controllers\ArticleController@create')->name('article.create');
Route::post('/{category_slug}', 'App\Http\Controllers\ArticleController@store')->name('article.store');
Route::get('/{category_slug}/{slug}', 'App\Http\Controllers\ArticleController@show')->name('article.show');
Route::get('/{category_slug}/{slug}/edit', 'App\Http\Controllers\ArticleController@edit')->name('article.edit');
Route::patch('/{category_slug}/{slug}', 'App\Http\Controllers\ArticleController@update')->name('article.update');


