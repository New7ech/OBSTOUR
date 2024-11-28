<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActiviteRequest;
use App\Http\Requests\UpdateActiviteRequest;
use App\Models\Activite;
use App\Models\Formulaire;
use App\Models\Mensuel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; // Ajout de l'espace de noms pour Auth ;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('activite.index', [
            'activite' => Activite::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activite.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActiviteRequest $request)  
    {  // Valider les données du formulaire  
        $validatedData = $request->validated();  
        $userId = Auth::id();  
        $userCompa = Auth::user()->compagnie_id;  
        
        // Récupérer le mensuel à partir de l'identifiant fourni  
        $mensuel = Mensuel::findOrFail($request->mensuels_id);  
        
        // Ajouter l'ID utilisateur et compagnie aux données validées  
        $validatedData['users_id'] = $userId;   
        $validatedData['compagnie_id'] = $userCompa;   
        
        // Vérifiez si l'objet activite existe ou non pour cette compagnie  
        try {  
            if ($mensuel->activites()->where('compagnie_id', $userCompa)->exists()) {  
                // Mise à jour de activite si elle existe  
                $mensuel->activites()->where('compagnie_id', $userCompa)->first()->update($validatedData);  
            } else {  
                // Création de activite si elle n'existe pas  
                $mensuel->activites()->create($validatedData);  
            }  
        } catch (\Throwable $th) {  
            // Afficher l'erreur pour le débogage  
            dd($th);  
        }   
        
        return redirect()->back()->withSuccess('Activité enregistrée avec succès.');  
    
    }
 

    /**
     * Display the specified resource.
     */
    public function show(Activite $activite)
    {
        return view('activite.show', compact('activite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activite $activite)
    {
        return view('activite.edit', compact('activite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActiviteRequest $request, Activite $activite)
    {
        $activite->update($request->validated());

        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activite $activite)
    {
        $activite->delete();
        return redirect()->route('activite.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
