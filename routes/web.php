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

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/municipe/index', 'MunicipeController@index');
Route::post('/municipe/cadastro', 'MunicipeController@store');

Route::get('/municipe/cadastro', function(){
    return view('municipes.cadastro');
});
