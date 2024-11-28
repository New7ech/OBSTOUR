<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremensuelformRequest;
use App\Http\Requests\UpdatemensuelformRequest;
use App\Models\Activite;
use App\Models\Cabilletteries;
use App\Models\Cacircuits;
use App\Models\Compagnie;
use App\Models\Formulaire;
use App\Models\mensuelform;
use Illuminate\Routing\Controller;

class MensuelFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Passer les données à la vue  
        return view('mensuelform.index');   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activite = Activite::all();
        $cacircuit = Cacircuits::all();
        return view('mensuelform.create', compact('activite', 'cacircuit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremensuelformRequest $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(mensuelform $mensuelform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mensuelform $mensuelform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemensuelformRequest $request, mensuelform $mensuelform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mensuelform $mensuelform)
    {
        //
    }
    // Ajoutez cette méthode dans le contrôleur MensuelFormController   
    public function statistiques()  
    {  
        $cabilletteries = Cabilletteries::all(); // Récupère toutes les données de Cabilletteries  

        // Traitement des données pour les graphiques  
        $labels = $cabilletteries->pluck('mois')->unique(); // Vous pouvez choisir d'autres attributs  
        $data = $cabilletteries->groupBy('mois')->map(function ($items) {  
            return $items->sum('ca_bil_iata'); // Somme par mois par exemple sur ca_bil_iata  
        });  

        return view('mensuelform.create', [  
            'labels' => $labels,  
            'data' => $data,  
        ]);  
    }
}
