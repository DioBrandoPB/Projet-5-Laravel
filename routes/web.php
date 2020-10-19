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


Route::get('/', 'Test@index');
Route::get('/jeux', 'Test@jeux');
Route::get('/profile', 'Test@profile');
Route::get('/inscription', 'Test@inscription');
Route::get('/contact', 'Test@contact');
Route::get('/connection', 'Test@connection');
Route::get('/prochainement', 'Test@prochainement');