<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller

{
public function logout(){
    auth()->logout();
    return redirect('/');
}
public function login(Request $request){
    $incomingFields = $request->validate([
        'loginemail'=>['required','min:4'],
        'loginpassword'=>['required','min:4'],
    ]);
    if(auth()->attempt(['email'=>$incomingFields['loginemail'],'password'=>$incomingFields['loginpassword']])){
       $request->session()->regenerate();

       return redirect("/");
    }else{
        return back()->withErrors(['login'=>'Invalid credentials']);
    }
}
public function register(Request $request){
    $incomingFields = $request->validate([
          'name'=>['required','min:3'],
          'email'=>['required','min:4'],
          'password'=>['required','min:4'],
        ]);
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user =  User::create($incomingFields);
        auth()->login($user);
        return redirect('/');
    }
}
