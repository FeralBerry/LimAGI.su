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
Route::group(['middleware' => ['auth', 'check']], function(){
$groupData = [
    'namespace' => 'Admin',
    'prefix' => 'redaction',
];
    Route::group($groupData, function(){
        Route::match(['GET','POST'],'/', ['uses' => 'AdminIndexController@index', 'as' => 'admin-index']);
        //User Admin
        Route::match(['GET','POST'],'/users', ['uses' => 'AdminIndexController@users', 'as' => 'admin-users']);
        Route::match(['GET','POST'],'/users/edit/{id?}', ['uses' => 'AdminIndexController@usersEdit', 'as' => 'admin-users-edit']);
        Route::match(['GET','POST'],'/users/delete/{id}', ['uses' => 'AdminIndexController@deleteUser', 'as' => 'admin-user-delete']);
        //Blog Admin
        Route::match(['GET','POST'],'/blog', ['uses' => 'BlogController@index', 'as' => 'admin-blog']);
        Route::match(['GET','POST'],'/blog/edit/{id?}', ['uses' => 'BlogController@blogEdit', 'as' => 'admin-blog-edit']);
        Route::match(['GET','POST'],'/blog/delete/{id}', ['uses' => 'BlogController@blogDelete', 'as' => 'admin-blog-delete']);
        Route::match(['GET','POST'],'/blog/add', ['uses' => 'BlogController@blogAdd', 'as' => 'admin-blog-add']);
        Route::match(['GET','POST'],'/blog/deleteImg/{id}', ['uses' => 'BlogController@deleteImg', 'as' => 'admin-blog-image-delete']);
        Route::match(['GET','POST'],'/blog/deleteTitleImg/{id}', ['uses' => 'BlogController@deleteTitleImg', 'as' => 'admin-blog-title-image-delete']);
        Route::match(['GET','POST'],'/blog/deleteVideoImg/{id}', ['uses' => 'BlogController@deleteVideoImg', 'as' => 'admin-blog-videoImg-delete']);
        Route::match(['GET','POST'],'/blog/deleteVideo/{id}', ['uses' => 'BlogController@deleteVideo', 'as' => 'admin-blog-video-delete']);
        //Blog tags Admin
        Route::match(['GET','POST'],'/blogTags', ['uses' => 'BlogTagsController@index', 'as' => 'admin-blogTags']);
        Route::match(['GET','POST'],'/blogTags/edit/{id?}', ['uses' => 'BlogTagsController@blogTagsEdit', 'as' => 'admin-blogTags-edit']);
        Route::match(['GET','POST'],'/blogTags/delete/{id}', ['uses' => 'BlogTagsController@blogTagsDelete', 'as' => 'admin-blogTags-delete']);
        Route::match(['GET','POST'],'/blogTags/add', ['uses' => 'BlogTagsController@blogTagsAdd', 'as' => 'admin-blogTags-add']);
    });
});

Route::match(['GET','POST'],'/home', 'HomeController@index')->name('home');