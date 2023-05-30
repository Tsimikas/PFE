<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marin;
use Illuminate\Validation\Rule;
use App\Models\User;


class MarinController extends Controller
{
    public function create(){
        // hna n9der ndir acces admin berk ....
        return view('ajoute-marin');
    }


    public function store(){

        $donne = request()->validate([
            'Nom'=>['required','max:100','min:4'],
            'Prenom'=>['required','max:100','min:4'],
            'Matricule'=>['required', Rule::unique('Marins','Matricule')],
            'Date_Naissance'=>['required','date'],
            'email'=>['required','email', Rule::unique('Marins','email')],
            'Post_travail'=>['required'],
            'Numero_telephone'=>['required','numeric', Rule::unique('Marins','Numero_telephone')],


        ]);


        $marin = new Marin($donne);
        $marin->user_id = auth()->id(); // user_id ta3 marin howa user_id te3 li creyah
        $marin->save();


        // hado mamchawch
        // 1) $donne['user_id'] = auth()->user()->user_id;
        //   Marin::create($donne);

        // 2) Marin::create(array_merge($donne, ['user_id' => auth()->user()->id]));

        return redirect('/')->with('success', 'GREAT, Marin has been created');







    }






}

