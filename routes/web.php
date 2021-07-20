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

// use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('index');
});

// vgandhi075
// Route::get('/post', [PostController::class, 'index']);
// Route::get('/user', 'PostController@index');
// Route::get('/guru', 'GuruController@index')->name('guru.read');
// Route::get('/create', 'GuruController@create')->name('guru.create');
// Route::get('/update', 'GuruController@update')->name('guru.update');
// Route::get('/delete', 'GuruController@delete')->name('guru.delete');
Route::resource('guru','GuruController');

