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
Route::get('/homepage','App\Http\Controllers\UserController@index')->name('homepage');
Route::get('/contact','App\Http\Controllers\UserController@contact')->name('contact');
Route::get('/about','App\Http\Controllers\UserController@about')->name('about');
Route::get('/portfolio','App\Http\Controllers\UserController@portfolio')->name('portfolio');
Route::get('/service','App\Http\Controllers\UserController@service')->name('service');
Route::get('/team','App\Http\Controllers\UserController@team')->name('team');
Route::get('/blog','App\Http\Controllers\UserController@blog')->name('blog');
Route::get('/pricing','App\Http\Controllers\UserController@pricing')->name('pricing');