<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMensuelRequest;
use App\Http\Requests\UpdateMensuelRequest;
use App\Models\Cabilletteries;
use App\Models\Compagnie;
use App\Models\Formulaire;
use App\Models\Mensuel;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MensuelController extends Controller
{
    /**  
     * Display a listing of the resource.  
     */  
    public function index()  
    {  
        $compagnies = Compagnie::all();
        $formulaire = Formulaire::all();
        $formulaire_id = Formulaire::all();
        return view('mensuel.create1', compact('compagnies', 'formulaire', 'formulaire_id'));
    }  

    public function create()  
    {  
        return view('mensuel.create');
    }  
    
    /**
     * Show the form for creating a new resource.
     */

     public function store(StoreMensuelRequest $request)  
     {  
         // Récupérer toutes les compagnies  
         $compagnies = Compagnie::all();  
     
         // Boucle à travers chaque compagnie  
         foreach ($compagnies as $compagnie) {  
             // Boucle pour chaque mois de 1 à 12  
             for ($mois = 1; $mois <= 12; $mois++) {  
                 // Vérifier si le mensuel existe déjà pour cette compagnie et ce mois  
                 $exist = Mensuel::where('compagnie_id', $compagnie->id)  
                                 ->where('mois', $mois)  
                                 ->exists();  
     
                 // Si l'enregistrement n'existe pas, le créer  
                 if (!$exist) {  
                     Mensuel::create([  
                         'compagnie_id' => $compagnie->id,  
                         // 'formulaire_id' => $request->formulaire_id, // Assurez-vous d'envoyer ce champ depuis le formulaire  
                         'trimestre' => intdiv($mois - 1, 3) + 1, // Calcul du trimestre basé sur le mois  
                         'mois' => $mois,  
                     ]);  
                 }  
             }  
         }  
     
         // Redirection ou retour avec un message de succès  
         return redirect()->route('formulaire.trimesters')->with('success', 'Enregistrement effectué avec succès !!!');  
     }

    /**
     * Display the specified resource.
     */
    public function show(Mensuel $mensuel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensuel $mensuel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMensuelRequest $request, Mensuel $mensuel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensuel $mensuel)
    {
        //
    }
}
