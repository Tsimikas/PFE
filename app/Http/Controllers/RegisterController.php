<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
     public function create(){
         return view('register');
     }

     public function store(){

        $attributes = request()->validate([
             'Nom'=>['required','max:100','min:4'],
             'Prenom'=>['required','max:100','min:4'],
             'email'=>['required','email', Rule::unique('users','email')],
             'profil'=>['required','in:admin,armement,ecrivant'],
             'password'=>['required','max:100','min:5'],
             'Numero_telephone'=>['required','numeric']
         ]);

         $attributes['password'] = bcrypt($attributes['password']);


         $user =User::create($attributes);

         auth()->login($user);

         session()->flash('success','GREAT! Your acount has been created.');

         if ($attributes['profil'] == 'admin' ||
             $attributes['profil'] == 'armement') {
             return
            redirect('/')->with('success','GREAT! Your acount has been created.');
            }else return
            redirect('/liste-marin')->with('success','GREAT! Your acount has been created.');




        // wela ecrivant -> page tea les marins (exmample) sinon si admin or armement page officiel
         //return redirect('/');





      }
}
