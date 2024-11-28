<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNbbilletdestsRequest;
use App\Http\Requests\UpdateNbbilletdestsRequest;
use App\Models\Formulaire;
use App\Models\Mensuel;
use App\Models\Nbbilletdests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class NbbilletdestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nbbilletdests.index', [
            'nbbilletdest' => Nbbilletdests::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nbbilletdests.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNbbilletdestsRequest $request)  
    { // Valider les données du formulaire  
        $validatedData = $request->validated();  
        $userId = Auth::id();  
        $userCompa = Auth::user()->compagnie_id;  
        
        // Récupérer le mensuel à partir de l'identifiant fourni  
        $mensuel = Mensuel::findOrFail($request->mensuels_id);  
        
        // Ajouter l'ID utilisateur et compagnie aux données validées  
        $validatedData['users_id'] = $userId;   
        $validatedData['compagnie_id'] = $userCompa;   
        
        // Vérifiez si l'objet nbbilletdest existe ou non pour cette compagnie  
        try {  
            if ($mensuel->nbbilletdests()->where('compagnie_id', $userCompa)->exists()) {  
                // Mise à jour de nbbilletdest si elle existe  
                $mensuel->nbbilletdests()->where('compagnie_id', $userCompa)->first()->update($validatedData);  
            } else {  
                // Création de nbbilletdest si elle n'existe pas  
                $mensuel->nbbilletdests()->create($validatedData);  
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
    public function show(Nbbilletdests $nbbilletdest)
    {
        return view('nbbilletdests.show', compact('nbbilletdest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nbbilletdests $nbbilletdest)
    {
        return view('nbbilletdests.edit', compact('nbbilletdest'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNbbilletdestsRequest $request, Nbbilletdests $nbbilletdest)
    {
        $nbbilletdest->update($request->validated());
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nbbilletdests $nbbilletdest)
    {
        $nbbilletdest->delete();
        return redirect()->route('nbbilletdests.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
