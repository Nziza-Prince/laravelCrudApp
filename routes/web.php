<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view("home");
});
Route::get('/register',function(){
    return view("register");
});
Route::post('register',[userController::class,'register']);
