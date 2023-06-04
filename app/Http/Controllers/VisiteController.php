<?php

namespace App\Http\Controllers;

use App\Models\Marin;
use App\Models\visitemedical;
use Illuminate\Http\Request;

class VisiteController extends Controller
{
    public function create(){
        return view('/visitemedical');
    }
       

    public function store(){

        $attributes = request()->validate([
            'date_visite'=>['required','date'],
             'date_fin'=>['required','date'],
             'marin'=>['required','string', 'exists:Marins,Matricule'],
         ]);

         $marin = Marin::where('Matricule', $attributes['marin'])->firstOrFail();
       
        $visitemedical= new visitemedical($attributes);
        $visitemedical->user_id = auth()->id();
        $visitemedical->marin_id = $marin->id;
        $visitemedical->save();

        return redirect('/');
        }


}
