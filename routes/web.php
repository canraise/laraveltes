<?php
use Illuminate\Http\Request;
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
Route::get('tes','HomeController@tes');
Route::get('tes2','HomeController@tes2');
Route::get('dashboard','HomeController@dashboard');
Route::resource('article', 'HomeController');


//login signup
Auth::routes();

Route::get('/home', 'HomeController@index');


//delete
Route::get('/home/{id}', 'HomeController@destroy');
//edit
Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/update/{id}', 'HomeController@update');

//ajax
 Route::get('manage-item-ajax', 'ItemAjaxController@manageItemAjax');
 Route::resource('item-ajax', 'ItemAjaxController');