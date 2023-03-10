<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\PostsController;

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

Route::get('/mainpage/{id}/{token}', [PostsController::class, 'index'])->name('PostController.index');
Route::get('/signout', [UserAuth::class, 'signOut']);
Route::post('/', [UserAuth::class, 'customLogin']);
Route::post('/login', [UserAuth::class, 'customRegistration']);
