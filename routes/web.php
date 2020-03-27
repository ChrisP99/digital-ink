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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//See, it's because your resource is going to stories, my one is going to account, but it says users in the thing
Route::resource('stories', 'StoryController');
Route::get('stories/{story}', 'StoryController@show');

Route::get('/search', 'StoryController@search');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('/account', 'AuthController');
Route::get('/account', function () {
    return view('account');
});

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('account', 'AuthController@account');
Route::get('logout', 'AuthController@logout');

Auth::routes();
