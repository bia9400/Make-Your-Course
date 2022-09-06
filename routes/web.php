<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('public.welcome');
});

Auth::routes();



//Da mettere in admin dopo 
/* Route::get('/home', 'HomeController@index')->name('home'); */

Route::get('{any?}', function () {
    return view('public.welcome');
})->where("any", ".*");
