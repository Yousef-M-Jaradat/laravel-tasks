<?php

use App\Http\Controllers\Users;
// use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\razan;
use App\Http\Controllers\taskA;

route::post('user',[taskA::class,'data']);
Route::view('login','login');
route::view('home','home');

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// Route::get('/', function(){
//     return view('welcome');
// });

// Route::get('/users', function () {
//     return view('users');
// });
// Route::get('/test/{test}', function ($test){
//     return $test;
// });


// Route::get('/users/{username}', function ($username) {
//     // $username;
//     return $username;
// });


// Route::get('posts',[Users::class,'showUsers']);
// Route::get('posts/edit',[Users::class,'editUsers']);
// Route::get('posts/update',[Users::class,'updateUsers']);
// Route::get('posts/delete',[Users::class,'deleteUsers']);


// Route::controller(users::class)->group(function(){
//     Route::get('posts','showUsers');
// });
