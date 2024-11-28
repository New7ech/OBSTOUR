<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmploiRequest;
use App\Http\Requests\UpdateEmploiRequest;
use App\Models\Emploi;
use App\Models\Formulaire;
use App\Models\Mensuel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('emploies.index', [
            'emploie' => Emploi::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('emploies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmploiRequest $request)  
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
        
        // Vérifiez si l'objet emploie existe ou non pour cette compagnie  
        try {  
            if ($mensuel->emploies()->where('compagnie_id', $userCompa)->exists()) {  
                // Mise à jour de emploie si elle existe  
                $mensuel->emploies()->where('compagnie_id', $userCompa)->first()->update($validatedData);  
            } else {  
                // Création de emploie si elle n'existe pas  
                $mensuel->emploies()->create($validatedData);  
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
    public function show(Emploi $emploie)
    {
        return view('emploies.show', compact('emploie'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Emploi $emploie)
    {
        return view('emploies.edit', compact('emploie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmploiRequest $request, Emploi $emploie)
    {
        $emploie->update($request->validated());
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Emploi $emploie)
    {
        $emploie->delete();
        return redirect()->route('emploies.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
