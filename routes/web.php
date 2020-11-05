<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::group(['middleware' => ['auth']], function(){
    Route::get('top','CramController@top');
    Route::get('search', 'CramController@search');
    Route::get('problem', 'CramController@problem');
    Route::get('answer', 'CramController@answer');
    Route::get('juniorSelect', 'CramController@juniorSelect');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
