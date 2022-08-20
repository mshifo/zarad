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



Route::get('/', 'HomeController@home')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('/contact', 'HomeController@message')->name('message');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/products/{id}', 'HomeController@product')->name('product');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/services/{id}', 'HomeController@service')->name('service');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
