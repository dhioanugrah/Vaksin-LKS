<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'InfoController@index')->name('index');
Route::post('/form', 'InfoController@store')->name('store.form');
Route::get('/form/create', 'InfoController@create')->name('create.form');
// Route::get('/', 'InfoController@index')->('index');
// Route::get('/home/form', 'InfoController@FormSave')->('form');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit.form');
Route::get('/update/{id}', 'HomeController@update')->name('update.form');
Route::get('/delete/{id}', 'HomeController@delete')->name('delete.form');

