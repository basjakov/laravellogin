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

Route::get('/home','homecontroller@show');

Route::get('/','homecontroller@show');

Route::post('/','homecontroller@changepassword');
				

//login
Route::get('/login','logincontroller@show');
Route::post('/login','logincontroller@login');
Route::get('/logout','logincontroller@logout');

Route::post('/successlogin','logincontroller@successlogin');

//register

Route::get('/register','registercontroller@show');
Route::post('/register','registercontroller@create');



//Activate 

Route::get('activate/{token}', 'homecontroller@activate') ->name('activate');