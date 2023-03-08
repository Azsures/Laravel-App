<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/mainpage', 'App\Http\Controllers\PostController@');
Route::post('/', [UserAuth::class, 'customLogin']);
Route::post('/login', [UserAuth::class, 'customRegistration']);
