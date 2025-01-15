<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;

Route::get('/', function () {
    $posts = [];
    $username = null;
    if(auth()->check()){
        $user = auth()->user();
        $username = $user->name;
        $posts = auth()->user()->userPosts()->latest()->get();
    }
    return view('welcome',['posts'=>$posts,'username'=>$username]);
});
Route::get('/register',function(){
    return view("register");
});
Route::post('/register',[userController::class,'register']);
Route::post('/login',[userController::class,'login']);
Route::post('/logout',[userController::class,'logout']);
Route::post("/create-post",[postController::class, 'createPost']);
