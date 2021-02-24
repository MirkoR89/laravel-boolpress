<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Rounte API Articles
Route::get('articles', 'API\ArticleController@index');

//Rounte API Categories
Route::get('categories', 'API\CategoryController@index');

//Rounte API Tags
Route::get('tags', 'API\TagController@index');