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
    return view('index');
});

// Route::get('/tes', function () {
//     return view('tes');
//     //login
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

//ini route pake parent layout.blade
Route::get('tes','MainController@tes');
Route::get('tes2','MainController@tes2');
Route::get('dashboard','MainController@dashboard');
Route::get('article','MainController@article');



//login signup
Auth::routes();

Route::get('/home', 'HomeController@index');


//delete
Route::get('/dashboard/{id}', 'MainController@destroy');
//edit
Route::get('/edit/{id}', 'MainController@edit');
Route::post('/update/{id}', 'MainController@update');

