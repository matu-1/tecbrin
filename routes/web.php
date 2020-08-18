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
    return view('welcome');
});

// Auth::routes();
Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('login',['as'=>'login','uses'=>'Auth\LoginController@login2']);
Route::get('logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);

Route::group(['middleware' => ['auth']], function() {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('usuario', 'UsuarioController');
});