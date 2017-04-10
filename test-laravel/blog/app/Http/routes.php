<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('salut', function () {
    return "salut";
});

Route::get('salut/{name}-{age}', function ($name, $age) {
    return "salut $name, tu as $age";
})  -> where('name', '[a-zA-Z0-9\-]+')
    -> where('age', '[0-9]+');