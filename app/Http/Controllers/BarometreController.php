<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barometre;
use App\Models\Compagnie;
use App\Models\Formulairebar;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBarometreRequest;
use App\Http\Requests\UpdateBarometreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class BarometreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)  
    {  
        $query = Barometre::query();  

        // Filtrer par année  
        if ($request->has('annee') && $request->annee) {  
            $query->whereYear('created_at', $request->annee);  
        }  

        // Filtrer par compagnie  
        if ($request->has('compagnie_id') && $request->compagnie_id) {  
            $query->where('compagnie_id', $request->compagnie_id);  
        }  

        $barometres = $query->paginate(10); // Pagination ou autre méthode de récupération  

        $compagnies = Compagnie::all(); // Récupérez toutes les compagnies pour le dropdown  

        return view('barometres.index', compact('barometres', 'compagnies'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer les compagnies pour le select
        $compagnies = Compagnie::all();
        return view('barometres.create', compact('compagnies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarometreRequest $request)
    {
        // Valider les données du formulaire  
        $validatedData = $request->validated();  
        // Récupérer l'identifiant de l'utilisateur authentifié  
        $userId = Auth::id();  
        // Récupérer l'identifiant de la compagnie de l'utilisateur authentifié  
        $compagnieId = Auth::user()->compagnie_id;  

        // Récupérer tous les trimestres de formulaire associés à cet utilisateur et cette compagnie  
        $formulaires = Formulairebar::where('users_id', $userId)  
                                ->where('compagnie_id', $compagnieId)  
                                ->get();  

        // Vérifier si aucun formulaire n'est trouvé  
        if ($formulaires->isEmpty()) {  
            return redirect()->back()->withErrors('Aucun trimestre trouvé pour cet utilisateur et cette compagnie.');  
        }  

        // Parcourir chaque trimestre des formulaires  
        foreach ($formulaires as $formulaire) {  
            $submittedTrimestre = $formulaire->trimestre; // Récupérer le trimestre  

            // Vérifier si le trimestre existe déjà dans la table Barometre  
            $existingCabillettery = Barometre::where('users_id', $userId)  
                                                ->where('compagnie_id', $compagnieId)  
                                                ->where('trimestre', $submittedTrimestre)  
                                                ->first();  

            if (!$existingCabillettery) {  
                // Ajouter le trimestre aux données validées  
                $dataToStore = $validatedData;  
                $dataToStore['trimestre'] = $submittedTrimestre;  
                $dataToStore['compagnie_id'] = $compagnieId;  
                $dataToStore['users_id'] = $userId;  

                // Enregistrer la nouvelle entité avec les données validées  
                Barometre::create($dataToStore);  
            }  
        }  
        
        return redirect()->route('formulairebarometre.trimesters')  
                        ->withSuccess('Les Barometre ont été ajoutées (si elles n existaient pas déjà).');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Barometre $barometre)
    {
        return view('barometres.show', compact('barometre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barometre $barometre)
    {
        // Récupérer les compagnies pour le select lors de l'édition
        $compagnies = Compagnie::all();
        return view('barometres.edit', compact('barometre', 'compagnies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarometreRequest $request, Barometre $barometre)
    {
        $barometre->update($request->validated());

        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barometre $barometre)
    {
        $barometre->delete();
        return redirect()->route('barometres.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
