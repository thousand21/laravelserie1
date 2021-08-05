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



Route::get('/van', function () {
    $papa="papa";
    return $papa;
});

Route::get('/', function () {
    $mama="mama";
    return view('/welcome',compact("mama"));
});

Route::get('/sum', function () {
    $facteur1="1";
    $facteur2="2";
    return view('/sum',compact("facteur1","facteur2"));
});
