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

Auth::routes();
\App\Http\Controllers\HotelController::routes();
Route::get('/home','HomeController@index');
Route::resource('uncurity/','TipoController');
Route::resource('uncurity/tipo/rfi','RfiController');
Route::resource('uncurity/tipo/xss','XssController');

