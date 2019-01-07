<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
https://blog.muva.tech/lesson-8-showing-updating-deleting-posts-blog-application-laravel-5-5/
|
*/

Route::get('/', 'PostController@getIndex')->name('index');

Auth::routes();

//named routes to generate URLs, ie. $url = route('home'), return redirect()->route('profile');
Route::get('/home', 'HomeController@index')->name('home');

//shouldn't I name the two routes differet for get and post.form?
//actually it's okay since the verbs are different?
Route::get('/author/post', 'HomeController@getPostForm')->name('post.form');
Route::post('/author/post', 'HomeController@createPost')->name('post.form');

//shows the details, ie. description along with title
Route::get('/author/post/detail/{id}', 'HomeController@getPost')->name('post.detail');

//get to edit and post to update after edits are done
Route::get('/author/post/edit/{id}', 'HomeController@editPost')->name('post.edit');
Route::post('/author/post/edit/{id}', 'HomeController@updatePost')->name('post.update');

//delete post
Route::get('/author/post/delete/{id}', 'HomeController@deletePost')->name('post.delete');


