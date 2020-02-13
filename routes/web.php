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
    return view('welcome');
});

Route::get('test1',function(){
    return 'Hello world.';
});

Route::get('test2',function(){
    return view('test2');
});

Route::get('test3','controller@test');

//練習問題

Route::get('top',function(){
    return view('top');
});