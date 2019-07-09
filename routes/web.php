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
use App\Projekti;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});



Route::get('/administracija', function () {
    return view('welcome');
});



Route::get('file', 'FileControllerProjekat@showUploadForm')->name('upload.file');

Route::post('file', 'FileControllerProjekat@storeProjekti');
Route::get('index', 'FileControllerProjekat@showProjekti');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
