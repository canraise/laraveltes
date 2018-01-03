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

Route::get('/', function () {
    return view('welcome');
});
//auth
Auth::routes();


//middleware auth
Route::group(['middleware' => ['auth']], function() {
Route::get('/post', 'PostController@index')->name('post.index');
//create post
Route::get('/post/create', 'PostController@create')->name('post.create');
//store post
Route::post('/post/create', 'PostController@store')->name('post.store');
//edit post
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit');
//patch untuk uodate
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update');
//delete post
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy');
//detail selengkapnya
Route::get('/post/{post}', 'PostController@show')->name('post.show');
//post komentar
Route::post('/post/{post}', 'PostCommentController@store')->name('post.comment.store');


});

