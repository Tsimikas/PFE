<?php

namespace App\Http\Controllers;

use App\Models\bondebarquement;
use App\Models\Marin;
use App\Models\Port;
use Illuminate\Http\Request;

class DebarquementController extends Controller
{
    public function create(){
        return view('debarquement');
    }

    public function store(){
        $hayder = request()->validate([
            'marin_name'=>['required','string', 'exists:Marins,Matricule'],
            'port'=>['required','string', 'exists:Ports,Nom'],
            'date_debarquement'=>['required','date'],
            'navire'=>['required','string', 'exists:navires,nom'],
        ]);

        $marin = Marin::where('Matricule', $hayder['marin_name'])->firstOrFail();
        $port = Port::where('Nom', $hayder['port'])->firstOrFail();

        $bondebarquement = new bondebarquement($hayder);
        $bondebarquement->user_id = auth()->id();
        $bondebarquement->marin_id = $marin->id;
        $bondebarquement->port_id = $port->id;
        $bondebarquement->save();

        return redirect('/');
    }
}
