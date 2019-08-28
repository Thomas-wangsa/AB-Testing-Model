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
    return redirect('/login');
});

Auth::routes();
Route::get('/logout',function(){
	Auth::guard()->logout();
    return redirect('/login');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/compare-model', 'CompareModelController');


Route::post('/ajax/a/get_engine_name', 'CompareModelController@getEngineNameByDataForA')->name('getEngineNameByDataForA');
