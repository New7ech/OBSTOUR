<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBilletsaerienneRequest;
use App\Http\Requests\UpdateBilletsaerienneRequest;
use App\Models\Billetsaerienne;
use App\Models\Formulaire;
use App\Models\Mensuel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BilletsaerienneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nbbilletcompa.index', [
            'nbbilletcompa' => Billetsaerienne::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nbbilletcompa.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBilletsaerienneRequest $request)
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
       
       // Vérifiez si l'objet nbbilletcompa existe ou non pour cette compagnie  
       try {  
           if ($mensuel->billetsaeriennes()->where('compagnie_id', $userCompa)->exists()) {  
               // Mise à jour de nbbilletcompa si elle existe  
               $mensuel->billetsaeriennes()->where('compagnie_id', $userCompa)->first()->update($validatedData);  
           } else {  
               // Création de nbbilletcompa si elle n'existe pas  
               $mensuel->billetsaeriennes()->create($validatedData);  
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
    public function show(Billetsaerienne $nbbilletcompa)
    {
        return view('nbbilletcompa.show', compact('nbbilletcompa'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billetsaerienne $nbbilletcompa)
    {
        return view('nbbilletcompa.edit', compact('nbbilletcompa'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBilletsaerienneRequest $request, Billetsaerienne $nbbilletcompa)
    {
        $nbbilletcompa->update($request->validated());

        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billetsaerienne $nbbilletcompa)
    {
        $nbbilletcompa->delete();
        return redirect()->route('nbbilletcompa.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
