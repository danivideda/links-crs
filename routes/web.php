<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LinkController@show');
Route::get('/submit', 'FormController@show');
Route::post('/submit', 'FormController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
