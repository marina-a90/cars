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

Route::get('/', function () {
    $name = 'Marina';
    $age = '28';
    // return view('welcome', ['name'=>'Marina']);
    return view('welcome', compact('name', 'age'));
});

Route::get('about', function () {
    return view('additional.about');
});

// Route::get('view', function () {
//     return view('additional.view', compact('cars'));
// });

Route::resource('cars', 'CarsController');