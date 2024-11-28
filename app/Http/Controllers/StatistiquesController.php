<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use App\Models\Statistique;
use Illuminate\Http\Request;

class StatistiquesController extends Controller
{
    public function index(Request $request)  
    {  
        $compagnies = Compagnie::all(); // Récupérer toutes les compagnies  
        $caIata = []; // Définir les valeurs pour le CA IATA  
        $caOtr = [];  // Définir les valeurs pour le CA Autres  
        $mois = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'];  

        if ($request->has('compagnie_id')) {  
            $compagnie_id = $request->input('compagnie_id');  

            // Logique pour récupérer les données spécifiques à la compagnie  
            $statistiques = Statistique::where('compagnie_id', $compagnie_id)->get();  

            // Remplissez les tableaux $caIata et $caOtr avec les données réelles  
            // Exemple :  
            // foreach ($statistiques as $statistique) {  
            //     $caIata[] = $statistique->ca_iata; // Assurez-vous que cette propriété existe  
            //     $caOtr[] = $statistique->ca_autre; // Assurez-vous que cette propriété existe  
            // }  
        }  

        return view('mensuelform.create', compact('compagnies', 'caIata', 'caOtr', 'mois'));  
    }  
}
