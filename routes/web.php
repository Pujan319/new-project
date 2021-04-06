<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/homepage','App\Http\Controllers\UserController@index')->name('homepage');
Route::get('/about','App\Http\Controllers\UserController@about')->name('about');
Route::get('/service','App\Http\Controllers\UserController@service')->name('service');
Route::get('/product','App\Http\Controllers\UserController@product')->name('product');
Route::get('/team','App\Http\Controllers\UserController@team')->name('team');
Route::get('/pricing','App\Http\Controllers\UserController@pricing')->name('pricing');
Route::get('/blog','App\Http\Controllers\UserController@blog')->name('blog');
Route::get('/contact','App\Http\Controllers\UserController@contact')->name('contact');
//productdetail
Route::get('/productdetail/{id}','App\Http\Controllers\UserController@productdetail')->name('productdetail');
Route::get('/searchresult','App\Http\Controllers\UserController@search')->name('searchproduct');
Route::get('/productbycategory/{id}','App\Http\Controllers\UserController@productbycategory')->name('productbycategory');
Route::get('/signup','App\Http\Controllers\UserController@signupform')->name('signup');
Route::post('/storecustomer','App\Http\Controllers\UserController@storecustomer')->name('storecustomer');

// admin routes
Route::get('/admin/home','App\Http\controllers\Admincontroller@index')->name('admin.home');
Route::get('/admin/addcategory','App\Http\controllers\Admincontroller@addcategory')->name('admin.addcategory');
Route::post('/admin/storecategory','App\Http\controllers\Admincontroller@storecategory')->name('admin.storecategory');

Route::get('/admin/addproduct','App\Http\controllers\Admincontroller@addproduct')->name('admin.addproduct');
Route::post('/admin/storeproduct','App\Http\controllers\Admincontroller@storeproduct')->name('admin.storeproduct');

//to show product

Route::get('/admin/showproduct','App\Http\Controllers\Admincontroller@showproduct')->name('admin.showproduct');
Route::get('/admin/showcategory','App\Http\Controllers\Admincontroller@showcategory')->name('admin.showcategory');

Route::get('/admin/editcategory{id}','App\Http\controllers\Admincontroller@editcategory')->name('admin.editcategory');
Route::post('/admin/updatecategory{id}','App\Http\controllers\Admincontroller@updatecategory')->name('admin.updatecategory');

Route::get('/admin/deletecategory{id}','App\Http\controllers\Admincontroller@deletecategory')->name('admin.deletecategory');

Route::get('/admin/editproduct{id}','App\Http\controllers\Admincontroller@editproduct')->name('admin.editproduct');
Route::post('/admin/updateproduct{id}','App\Http\controllers\Admincontroller@updateproduct')->name('admin.updateproduct');
Route::get('/admin/deleteproduct{id}','App\Http\controllers\Admincontroller@deleteproduct')->name('admin.deleteproduct');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
