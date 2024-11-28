<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormulairebarRequest;
use App\Http\Requests\UpdateFormulairebarRequest;
use App\Models\Barometre;
// use App\Models\barmletteries;
use App\Models\Formulaire;
use App\Models\Formulairebar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormulairebarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trimestres = Barometre::select('compagnie_id', 'trimestre', DB::raw('COUNT(*) as total'))  
            ->groupBy('compagnie_id', 'trimestre')  
            ->get();  
        return view('formulairebarometre.trimestre', compact('trimestres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulairebarometre.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormulairebarRequest $request)
    {
        // Création du formulaire  
        Formulairebar::create([  
            'trimestre' => $request->trimestre,  
            'compagnie_id' => $request->compagnie_id,  
            'users_id' => $request->users_id,  
        ]);  

        // Redirection avec un message de succès  
        // return redirect()->route('formulaire.trimesters')->with('success', 'Formulaire créé avec succès.');  
        return redirect()->route('barometres.create')  
                        ->withSuccess('success', 'Formulaire créé avec succès.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulairebar $formulairebar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulairebar $formulairebar)
    {
        return view('formulairebarometre.edit', compact('formulaire')); // Ajoutez une vue pour l'édition  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormulairebarRequest $request, Formulairebar $formulairebar)
    {
        $validatedData = $request->validated();  
        // Ajoutez ici la logique pour mettre à jour le formulaire  
        $formulairebar->update($validatedData);  

        return redirect()->route('formulairebarometre.index')  
                ->withSuccess('Le formulaire a été mis à jour avec succès.');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulairebar $formulairebar)
    {
        $formulairebar->delete(); // Supprimez le formulaire  
        return redirect()->route('formulairebarometre.index')  
                ->withSuccess('Le formulaire a été supprimé avec succès.');  
    }

    public function listTrimesters()  
    {  
        $trimesters = [  
            '1er trimestre' => 'du 1er janvier au 31 mars',  
            '2ème trimestre' => 'du 1er avril au 30 juin',  
            '3ème trimestre' => 'du 1er juillet au 30 septembre',  
            '4ème trimestre' => 'du 1er octobre au 31 décembre',  
        ];  

        $currentUserCompagnieId = Auth::user()->compagnie_id;  

        // Requête pour récupérer les données  
        $barometre = Barometre::select('compagnie_id', 'trimestre', DB::raw('COUNT(*) as total'))  
            ->where('compagnie_id', $currentUserCompagnieId) // Filtre par compagnie_id de l'utilisateur  
            ->groupBy('compagnie_id', 'trimestre')  
            ->get();  

        // Transformez le résultat en tableau associatif  
        $disabledTrimesters = [];  
        foreach ($barometre as $barm) {  
            // Concaténation pour formater la clé  
            $key = is_numeric($barm->trimestre) ? $barm->trimestre . 'ème trimestre' : $barm->trimestre;  
            // dd($key);
            // Vérifie si la clé dans les trimestres est valide  
            if (array_key_exists($key, $trimesters)) {  
                $disabledTrimesters[$key] = $barm->total > 0; // Si total > 0, on désactive  
                // dd($disabledTrimesters[$key]);
            }  
        }  
        

        return view('formulairebarometre.trimesters', compact('trimesters', 'disabledTrimesters'));   
    }
}
