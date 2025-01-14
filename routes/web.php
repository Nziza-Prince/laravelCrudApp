<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view("home");
});
Route::get('/register',function(){
    return view("register");
});
Route::post('/register',[userController::class,'register']);
Route::post('/login',[userController::class,'login']);
Route::post('/logout',[userController::class,'logout']);
Route::post("/create-post",[postController::class, 'createPost']);
