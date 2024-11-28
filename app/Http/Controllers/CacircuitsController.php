<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCacircuitsRequest;
use App\Http\Requests\UpdateCacircuitsRequest;
use App\Models\Cacircuits;
use App\Models\Formulaire;
use App\Models\Mensuel;
use Carbon\Carbon; // N'oubliez pas d'importer Carbon
use Illuminate\Support\Facades\Auth;

class CacircuitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cacircuits.index', [
            'cacircuit' => Cacircuits::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cacircuits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCacircuitsRequest $request)  
    {  
        // Valider les données du formulaire  
        $validatedData = $request->validated();  
        $userId = Auth::id();  
        $userCompa = Auth::user()->compagnie_id;  
        
        // Récupérer le mensuel à partir de l'identifiant fourni  
        $mensuel = Mensuel::findOrFail($request->mensuels_id);  
        
        // Ajouter l'ID utilisateur et compagnie aux données validées  
        $validatedData['users_id'] = $userId;   
        $validatedData['compagnie_id'] = $userCompa;   

        
        // Vérifiez si l'objet cacircuit existe ou non pour cette compagnie  
        try {  
            if ($mensuel->cacircuits()->where('compagnie_id', $userCompa)->exists()) {  
                // Mise à jour de cacircuit si elle existe  
                $mensuel->cacircuits()->where('compagnie_id', $userCompa)->first()->update($validatedData);  
            } else {  
                // Création de cacircuit si elle n'existe pas  
                $mensuel->cacircuits()->create($validatedData);  
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
    public function show(Cacircuits $cacircuit)
    {
        return view('cacircuits.show', compact('cacircuit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cacircuits $cacircuit)
    {
        return view('cacircuits.edit', compact('cacircuit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCacircuitsRequest $request, Cacircuits $cacircuit)
    {
        $cacircuit->update($request->validated());
        return redirect()->route('cacircuits.index')
                         ->withSuccess('updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cacircuits $cacircuit)
    {
        $cacircuit->delete();
        return redirect()->route('cacircuits.index')
                         ->withSuccess('deleted successfully.');
    }
}
