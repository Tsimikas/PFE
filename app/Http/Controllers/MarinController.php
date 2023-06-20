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
            'adress'=>['required'],
            'wilaya_de_naissance'=>['required'],
            'wilaya_de_domicile'=>['required'],

        ]);


        $marin = new Marin($donne);
        $marin->user_id = auth()->id(); // user_id ta3 marin howa user_id te3 li creyah
        $marin->save();

        $matricule= $donne['Matricule'];


        // hado mamchawch
        // 1) $donne['user_id'] = auth()->user()->user_id;
        //   Marin::create($donne);

        // 2) Marin::create(array_merge($donne, ['user_id' => auth()->user()->id]));

        return redirect()->route('fasicule.create',[
              'matricule' => $matricule
        ]);
     }

     public function search(){


        return view('liste-marin', [
         'marins' => Marin::latest()->filter(request(['search','situation']))->get()
        ]);

    }
     

    public function liste_embarquement(Request $request)
    {
        $search = $request->input('search');
    
        $marins = Marin::leftJoin('situations', function ($join) {
                $join->on('marins.id', '=', 'situations.marin_id')
                     ->whereRaw('situations.id = (SELECT MAX(id) FROM situations WHERE marin_id = marins.id)');
            })
            ->when($search, function ($query, $search) {
                $query->where(function ($subquery) use ($search) {
                    $subquery->where('marins.Nom', 'LIKE', '%'.$search.'%')
                             ->orWhere('situations.situation', 'LIKE', '%'.$search.'%')
                             ->orWhere('Prenom', 'like', '%' . $search . '%')
                             ->orWhere('email', 'like', '%' . $search . '%')
                             ->orWhere('Matricule', 'like', '%' . $search . '%')
                             ->orWhere('Date_Naissance', 'like', '%' . $search . '%')
                             ->orWhere('Numero_telephone', 'like', '%' . $search . '%')
                             ->orWhere('Post_travail', 'like', '%' . $search . '%');
                });
            })
            ->orderByRaw("FIELD(situations.situation, 'disponible', 'conge', 'embarquer')")
            ->select('marins.*')
            ->get();
    
        return view('liste_embarquement', [
            'marins' => $marins,
            'search' => $search
        ]);
    }
    
    
    

     public function liste_debarquement()
     {   $marins = Marin::all();
        return view('liste_debarquement', [
             'marins' => $marins
         ]);
     }

public function destroy($id)
{
    $marin = Marin::findOrFail($id);
    $marin->delete();

    return redirect('/')->with('success', 'Marin has been deleted');
}


public function recap(){
    $marins = Marin::with('contrat', 'fasicule', 'visitemedical')->filter(request(['search','situation']))
    ->get();

    $table = '<table>';
    
    // Loop through the marins
    foreach ($marins as $marin) {
    
        // Get the contrat and fasicule for the marin
        $contrat = $marin->contrat()->latest('date_fin')->first();
        $fasicule = $marin->fasicule()->latest('date_expriration')->first();
        $visitemedical = $marin->visitemedical()->latest('date_fin')->first();
    
        // Add a row to the table
        $table .= '<tr>';
        $table .= '<td>' . $marin->Nom . '</td>';
        $table .= '<td>' . ($contrat ? $contrat->date_fin : 'N/A') . '</td>';
        $table .= '<td>' . ($fasicule ? $fasicule->date_expriration : 'N/A') . '</td>';
        $table .= '<td>' . ($visitemedical ? $visitemedical->date_fin : 'N/A') . '</td>';
        $table .= '</tr>';
    }
    
    // Close the table
    $table .= '</table>';
    
    // Return the table
    return view('recap', compact('table','marins'));
}
     
     





}

