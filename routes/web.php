<?php

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

Route::get("/", "IndexController@index");

Route::get("/top-rated-movies", "MovieController@topRated");

Route::get("/top-rated-games", "VideogameController@topRated");

Route::get("/movies/shawshank-redemption", "MovieController@shawshank");

Route::get("/movies", "MovieController@index");

Route::get("/about-us", "AboutController@aboutUs");

Route::post("/movies/rate", "ReviewController@store");
