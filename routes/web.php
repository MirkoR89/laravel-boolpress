<?php

use App\Http\Controllers\PageController;
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

//Route home page
Route::get('/', 'PageController@home')->name('home');

//Route about page
Route::get('about', 'PageController@about')->name('about');

//Route contacts page
Route::get('contacts', 'PageController@contacts')->name('contacts');

//Route articles page
Route::get('articles', 'PageController@articles')->name('articles');




Route::get('articles_api', 'PageController@articles_api')->name('articles_api');
 
