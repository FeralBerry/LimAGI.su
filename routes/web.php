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

Route::match(['GET','POST'],'/', ['uses' => 'IndexController@index', 'as' => 'index']);
Route::match(['GET','POST'],'/contact', ['uses' => 'IndexController@contact', 'as' => 'contact']);
Route::match(['GET','POST'],'/about', ['uses' => 'IndexController@about', 'as' => 'about']);
Route::match(['GET','POST'],'/portfolio', ['uses' => 'IndexController@portfolio', 'as' => 'portfolio']);
Route::match(['GET','POST'],'/blog', ['uses' => 'IndexController@blog', 'as' => 'blog']);
Route::match(['GET','POST'],'/blog-post/{id}', ['uses' => 'IndexController@blogPost', 'as' => 'blog-post']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
