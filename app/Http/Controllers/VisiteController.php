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
             'Duree'=>['required'],
             'marin'=>['required','string', 'exists:Marins,Nom'],
         ]);

         $marin = Marin::where('Nom', $attributes['marin'])->firstOrFail();
       
        $visitemedical= new visitemedical($attributes);
        $visitemedical->user_id = auth()->id();
        $visitemedical->marin_id = $marin->id;
        $visitemedical->save();

        return redirect('/');
        }


}