<?php

namespace App\Http\Controllers;

use App\Models\bondebarquement;
use App\Models\Marin;
use App\Models\navire;
use App\Models\Port;
use App\Models\situation;
use Illuminate\Http\Request;
use  Carbon\Carbon;

class DebarquementController extends Controller
{
    public function create(){
        return view('debarquement');
    }

    public function store(){
        $today = Carbon::now();
        $hayder = request()->validate([
            'marin_name'=>['required','string', 'exists:Marins,Matricule'],
            'port'=>['required','string', 'exists:Ports,Nom'],
            'date_debarquement'=>['required','date'],
            'date_dembarquement'=>['required','date'],
            'navire'=>['required','string', 'exists:navires,nom'],
        ]);

        $marin = Marin::where('Matricule', $hayder['marin_name'])->firstOrFail();
        $port = Port::where('Nom', $hayder['port'])->firstOrFail();
        $navire = navire::where('nom',$hayder['navire'])->firstOrFail();

        $bondebarquement = new bondebarquement($hayder);
        $situation = new situation($hayder);


        $date_debarquement = $hayder['date_debarquement'];


        $bondebarquement->user_id = auth()->id();
        $bondebarquement->marin_id = $marin->id;
        $bondebarquement->port_id = $port->id;


        
        $situation->user_id = auth()->id();
        $situation->marin_id = $marin->id;
        $situation->situation = 'conge';
        $situation->date_debut = $date_debarquement;
        $situation->date_fin = $date_debarquement;


        $bondebarquement->save();
        $situation->save();



        $datedebarquement = $hayder['date_debarquement'];
        $datedembarquement = $hayder['date_dembarquement'];

        //$navire =  $hayder['navire'];
        $port =  $hayder['port'];



        return redirect()->route('imprimer',[
            'matricule' => $marin->Matricule,
            'wilaya' => $marin->wilaya_de_domicile, 
            'nom' => $marin->Nom,
            'prenom' => $marin->Prenom,
            'wilaya_de_domicile' => $marin->wilaya_de_domicile,
            'date_naissance'=>$marin->Date_Naissance,
            'lieu_naissance' => $marin->wilaya_de_naissance,
            'post_marin' => $marin->Post_travail,
            'datedebarquement' => $datedebarquement,
            'datedembarquement' => $datedembarquement,
            'port'=> $port,
            'navire'=> $navire->nom,
            'numero_role'=> $navire->numero_de_role
        ])->with('today',$today);
    }

    public function imprimer(Request $request){
        $data = [
            'matricule' => $request->matricule,
            'wilaya' => $request->wilaya,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance'=>$request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'wilaya_de_domicile' => $request->wilaya_de_domicile,
            'post_marin' => $request->post_marin,
            'port' => $request->port,
            'navire' => $request->navire,
            'datedebarquement' => $request->datedebarquement,
            'datedembarquement' => $request->datedembarquement,
            'numero_role'=> $request->numero_role,
            'today' => session('today')
        ];

       // dd($data);

        return view('imprimer', compact('data'));
    }
}
