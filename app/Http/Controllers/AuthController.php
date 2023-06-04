<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function store(){
        $attributes = request()->validate([
            'Username'=>['required'],
            'password'=>['required'],
         
        ]);

        //auth success and login

        if(auth()->attempt($attributes)) {
            session()->regenerate(); // contre les attaques web
        }


        //auth failed
        return back()
        ->withInput()
        ->withErrors(['password'=>'Incorrect password or username']);
    }






    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Good bye!');
    }


    public function create(){
        return view('login');
    }
}
