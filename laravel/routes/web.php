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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Data User Route
Route::get('/home', 'HomeController@index');
Route::post('/upData','DataController@upData');


//company
Route::get('/company','DataController@index');
Route::post('/inData','DataController@insert');
Route::get('/delcom-{id}','DataController@delcom');
Route::get('/upcom-{id}','DataController@upcom');

//package
Route::get('/inputPackage','PackageController@inPackage');
Route::post('/inputPackage','PackageController@insert');
Route::get('/listPackage','PackageController@listPackage');
Route::post('/paket-search','PackageController@search');
Route::get('/paket-{id}','PackageController@sort');

//Link
Route::get('/home', 'HomeController@index');
Route::get('/', 'DataController@welcome');
Route::get('/user', 'DataController@user');
Route::get('/call', 'DataController@call');
Route::get('/detail-paket-{id}', 'DataController@detail');
Route::get('/tentang', 'DataController@tentang');
Route::get('/paket', 'DataController@paket');
