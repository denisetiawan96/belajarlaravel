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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('coba');
});

Route::get('/', function () {
    return view('template');
});

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('button');
});

Route::get('tampildata', function() {
    $data = ['php', 'java', 'c', 'javascript', 'dart'];

    foreach ($data as $item){
        echo $item. '<br>';
    }

});