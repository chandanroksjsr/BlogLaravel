<?php

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

//Route::get('/', function () {
//    return view('frontend.index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Blog
Route::get('/', 'BlogController@index')->name('blog');
Route::get('/blog/{id}/{slug}', 'BlogController@show')->where('id', '\d+')->name('blog.show');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
//Index
    Route::get('/', 'Admin\AdminController@index')->name('admin');

//Categories
    Route::get('/categories', 'Admin\CategoriesController@index')->name('categories');
    Route::get('/categories/add', 'Admin\CategoriesController@addCategories')->name('categories.add');
    Route::post('/categories/add', 'Admin\CategoriesController@addRequestCategories');
    Route::get('/categories/edit/{id}', 'Admin\CategoriesController@editCategories')->where('id', '\d+')->name('categories.edit');
    Route::post('/categories/edit/{id}', 'Admin\CategoriesController@editRequestCategories')->where('id', '\d+');
    Route::delete('/categories/delete', 'Admin\CategoriesController@deleteCategories')->name('categories.delete');

//Posts
    Route::get('/posts', 'Admin\PostsController@index')->name('posts');
    Route::get('/posts/add', 'Admin\PostsController@addPosts')->name('posts.add');
    Route::post('/posts/add', 'Admin\PostsController@addRequestPosts');
    Route::get('/posts/edit/{id}', 'Admin\PostsController@editPosts')->where('id', '\d+')->name('posts.edit');
    Route::post('/posts/edit/{id}', 'Admin\PostsController@editRequestPosts')->where('id', '\d+');
    Route::delete('/posts/delete', 'Admin\PostsController@deletePosts')->name('posts.delete');

//Users
    Route::get('/users', 'Admin\UserController@index')->name('users');


});
