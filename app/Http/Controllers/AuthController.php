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
            'profil'=>['required','in:admin,gestionnaire,ecrivant,directeur']
        ]);

        //auth success and login

        if(auth()->attempt($attributes)) {
            session()->regenerate(); // contre les attaques web

            if($attributes['profil'] == 'ecrivant') {
                return redirect('/liste-marin')->with('success', 'Welcome Back!');
            } else {
                return redirect('/')->with('success', 'Welcome Back Ya el bobo!');
             } // login ida kan ecrivant ab3to to another page (example)
        }


        //auth failed
        return back()
        ->withInput()
        ->withErrors(['password'=>'Incorrect password , username or profil']);
    }






    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Good bye!');
    }


    public function create(){
        return view('login');
    }
}
