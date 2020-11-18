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
Route::match(['GET','POST'],'/blog/{alias}', ['uses' => 'IndexController@blogAlias', 'as' => 'blog-alias']);
Route::match(['GET','POST'],'/blog', ['uses' => 'IndexController@blog', 'as' => 'blog']);
Route::match(['GET','POST'],'/blog-post/{id}', ['uses' => 'IndexController@blogPost', 'as' => 'blog-post']);
Route::match(['GET','POST'],'/blog-post/add-comment', ['uses' => 'IndexController@addComment', 'as' => 'add-comment']);
Auth::routes();
Route::group(['middleware' => ['auth', 'checkAdmin']], function(){
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
        //Blog categories Admin
        Route::match(['GET','POST'],'/blogCat', ['uses' => 'BlogCategoriesController@index', 'as' => 'admin-blogCat']);
        Route::match(['GET','POST'],'/blogCat/edit/{id?}', ['uses' => 'BlogCategoriesController@categoriesEdit', 'as' => 'admin-blogCat-edit']);
        Route::match(['GET','POST'],'/blogCat/delete/{id}', ['uses' => 'BlogCategoriesController@categoriesDelete', 'as' => 'admin-blogCat-delete']);
        Route::match(['GET','POST'],'/blogCat/add', ['uses' => 'BlogCategoriesController@categoriesAdd', 'as' => 'admin-blogCat-add']);
        //Portfolio Admin
        Route::match(['GET','POST'],'/portfolio', ['uses' => 'PortfolioController@index', 'as' => 'admin-portfolio']);
        Route::match(['GET','POST'],'/portfolio/edit/{id?}', ['uses' => 'PortfolioController@portfolioEdit', 'as' => 'admin-portfolio-edit']);
        Route::match(['GET','POST'],'/portfolio/delete/{id}', ['uses' => 'PortfolioController@portfolioDelete', 'as' => 'admin-portfolio-delete']);
        Route::match(['GET','POST'],'/portfolio/add', ['uses' => 'PortfolioController@portfolioAdd', 'as' => 'admin-portfolio-add']);
        Route::match(['GET','POST'],'/portfolio/deleteImg/{id}', ['uses' => 'PortfolioController@deleteImg', 'as' => 'admin-portfolio-image-delete']);
        //Blog comments Admin
        Route::match(['GET','POST'],'/blogComments', ['uses' => 'CommentsController@blogCommentsIndex', 'as' => 'admin-blog-comments']);
        Route::match(['GET','POST'],'/blogComments/edit/{id?}', ['uses' => 'CommentsController@blogCommentsEdit', 'as' => 'admin-blog-comments-edit']);
        Route::match(['GET','POST'],'/blogComments/delete/{id}', ['uses' => 'CommentsController@blogCommentsDelete', 'as' => 'admin-blog-comments-delete']);
        //About Admin
        Route::match(['GET','POST'],'/about', ['uses' => 'AboutController@index', 'as' => 'admin-about']);
        Route::match(['GET','POST'],'/about/edit/{id?}', ['uses' => 'AboutController@aboutEdit', 'as' => 'admin-about-edit']);
        //Free Courses Admin
        Route::match(['GET','POST'],'/free-courses', ['uses' => 'FreeCoursesController@index', 'as' => 'admin-free-courses']);
        Route::match(['GET','POST'],'/free-courses/edit/{id?}', ['uses' => 'FreeCoursesController@coursesEdit', 'as' => 'admin-free-courses-edit']);
        Route::match(['GET','POST'],'/free-courses/add', ['uses' => 'FreeCoursesController@coursesAdd', 'as' => 'admin-free-courses-add']);
        Route::match(['GET','POST'],'/free-courses/delete/{id}', ['uses' => 'FreeCoursesController@coursesDelete', 'as' => 'admin-free-courses-delete']);
        Route::match(['GET','POST'],'/free-courses/deleteVideo/{id}', ['uses' => 'FreeCoursesController@coursesVideoDelete', 'as' => 'admin-free-courses-video-delete']);
        //Pay Courses Admin
        Route::match(['GET','POST'],'/pay-courses', ['uses' => 'PayCoursesController@index', 'as' => 'admin-pay-courses']);
        Route::match(['GET','POST'],'/pay-courses/edit/{id?}', ['uses' => 'PayCoursesController@coursesEdit', 'as' => 'admin-pay-courses-edit']);
        Route::match(['GET','POST'],'/pay-courses/add', ['uses' => 'PayCoursesController@coursesAdd', 'as' => 'admin-pay-courses-add']);
        Route::match(['GET','POST'],'/pay-courses/delete/{id}', ['uses' => 'PayCoursesController@coursesDelete', 'as' => 'admin-pay-courses-delete']);
        Route::match(['GET','POST'],'/pay-courses/deleteVideo/{id}', ['uses' => 'PayCoursesController@coursesVideoDelete', 'as' => 'admin-pay-courses-video-delete']);
        //Courses Name Admin
        Route::match(['GET','POST'],'/courses-name', ['uses' => 'CoursesNameController@index', 'as' => 'admin-courses-name-index']);
        Route::match(['GET','POST'],'/courses-name/edit/{id?}', ['uses' => 'CoursesNameController@coursesNameEdit', 'as' => 'admin-courses-name-edit']);
        Route::match(['GET','POST'],'/courses-name/add', ['uses' => 'CoursesNameController@coursesNameAdd', 'as' => 'admin-courses-name-add']);
        Route::match(['GET','POST'],'/courses-name/delete/{id}', ['uses' => 'CoursesNameController@coursesNameDelete', 'as' => 'admin-courses-name-delete']);
    });
});
Route::group(['middleware' => ['auth']], function() {
    $groupData = [
        'namespace' => 'User',
        'prefix' => 'user',
    ];
    Route::group($groupData, function () {
        Route::match(['GET','POST'],'/', ['uses' => 'UserIndexController@index', 'as' => 'user-index']);
        Route::match(['GET','POST'],'/info', ['uses' => 'UserIndexController@info', 'as' => 'user-info']);
        Route::match(['GET','POST'],'/chat-admin', ['uses' => 'ChatController@chatAdmin', 'as' => 'chat-admin']);
        Route::match(['GET','POST'],'/add-chat-admin', ['uses' => 'ChatController@addChatAdmin','as' => 'add-chat-admin']);
        Route::match(['GET','POST'],'/chat-html', ['uses' => 'ChatController@chatHtml', 'as' => 'chat-html']);
        Route::match(['GET','POST'],'/add-chat-html', ['uses' => 'ChatController@addChatHtml','as' => 'add-chat-html']);
        Route::match(['GET','POST'],'/chat-php', ['uses' => 'ChatController@chatPhp', 'as' => 'chat-php']);
        Route::match(['GET','POST'],'/add-chat-php', ['uses' => 'ChatController@addChatPhp','as' => 'add-chat-php']);
        Route::match(['GET','POST'],'/chat-js', ['uses' => 'ChatController@chatJs', 'as' => 'chat-js']);
        Route::match(['GET','POST'],'/add-chat-js', ['uses' => 'ChatController@addChatJs','as' => 'add-chat-js']);
        Route::match(['GET','POST'],'/chat-design', ['uses' => 'ChatController@chatDesign', 'as' => 'chat-design']);
        Route::match(['GET','POST'],'/add-chat-design', ['uses' => 'ChatController@addChatDesign','as' => 'add-chat-design']);
    });
});

Route::match(['GET','POST'],'/home', 'HomeController@index')->name('home');

