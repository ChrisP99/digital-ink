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

Route::get('/account', function () {
    return view('account');

})->middleware('verified');

Auth::routes(['verify' => true]);
// Adds authentication to check to see if a user is logged in

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin');
Route::post('post-registration', 'AuthController@postRegistration');
Route::get('account', 'AuthController@account');
Route::get('logout', 'AuthController@logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
