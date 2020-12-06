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

// Usuario tabla
    Route::get('/usuario', 'UsuarioController@index')->middleware('auth');
    Route::get('/usuario/create', 'UsuarioController@create')->middleware('auth');
    Route::post('/usuario/store', 'UsuarioController@store')->middleware('auth');
    Route::get('/usuario/show/{id}', 'UsuarioController@show')->middleware('auth');
    Route::get('/usuario/edit/{id}', 'UsuarioController@edit')->middleware('auth');
    Route::post('/usuario/update/{id}', 'UsuarioController@update')->middleware('auth');
    Route::get('/usuario/destroy/{id}', 'UsuarioController@destroy')->middleware('auth');

    // Buzon tabla
    Route::get('/buzon', 'BuzonController@index')->middleware('auth');
    Route::get('/buzon/create', 'BuzonController@create')->middleware('auth');
    Route::post('/buzon/store', 'BuzonController@store')->middleware('auth');
    Route::get('/buzon/show/{id}', 'BuzonController@show')->middleware('auth');
    Route::get('/buzon/edit/{id}', 'BuzonController@edit')->middleware('auth');
    Route::post('/buzon/update/{id}', 'BuzonController@update')->middleware('auth');
    Route::get('/buzon/destroy/{id}', 'BuzonController@destroy')->middleware('auth');

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
