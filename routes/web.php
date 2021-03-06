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

\Illuminate\Support\Facades\Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/create','controller@createAcount')->name('create_account');
Route::post('/create', 'Controller@storeAccount')->name('createAccount');
