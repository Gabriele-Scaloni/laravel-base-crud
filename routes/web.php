<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



/* Route::get('/', function () {
    return view('pages.home');
});
 */

Route::get('/', 'HomeController@home') -> name('home');
Route::get('/fumetto{{id}}'  ,'HomeController@fumetto') -> name('fumetto');
 
