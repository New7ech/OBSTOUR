<?php  

namespace App\Http\Controllers;  

use Carbon\Carbon;  
use Illuminate\Support\Facades\DB;
use App\Models\Formulaire;  
use App\Models\Cabilletteries;  
use App\Http\Controllers\Controller;  
use App\Http\Requests\StoreFormulaireRequest;  
use App\Http\Requests\UpdateFormulaireRequest;
use App\Models\Mensuel;
use Illuminate\Support\Facades\Auth; // Ajout de l'espace de noms pour Auth  

class FormulaireController extends Controller  
{  
    /**  
     * Display a listing of the resource.  
     */  
    // public function index()  
    // {  
    //     $formulaires = Formulaire::all(); // Récupération de tous les formulaires  
    //     return view('formulaire.index', compact('formulaires')); // Assurez-vous d'avoir une vue pour cela  
    // }  

    public function index()  
    {  
        $trimestres = Cabilletteries::select('compagnie_id', 'trimestre', DB::raw('COUNT(*) as total'))  
            ->groupBy('compagnie_id', 'trimestre')  
            ->get();  
        return view('formulaire.trimestre', compact('trimestres'));  
    }

    /**  formulaire.trimestre
     * Show the form for creating a new resource.  
     */  
    public function create(Mensuel $mensuel)  
    {  
        return view('formulaire.create',compact('mensuel'));  
    }  

    /**  
     * Store a newly created resource in storage.  
     */  
    public function store(StoreFormulaireRequest $request)  
    {  
        // Création du formulaire  
        Formulaire::create([  
            'trimestre' => $request->trimestre,  
            'compagnie_id' => Auth::user()->compagnie_id,  
            'users_id' => Auth::user()->id,  
        ]);  

        // Redirection avec un message de succès  
        // return redirect()->route('formulaire.trimesters')->with('success', 'Formulaire créé avec succès.');  
        return redirect()->route('mensuel.create')  
                        ->withSuccess('success', 'Formulaire créé avec succès.'); 
    }   

    public function storeFirstQuarter(StoreFormulaireRequest $request)  
    {  
        Formulaire::create([  
            'trimestre' => '1er trimestre',  
            'compagnie_id' => Auth::user()->compagnie_id,  
            'users_id' => Auth::user()->id,  
        ]);  
        return redirect()->route('mensuel.index')->with('success', 'Formulaire pour le 1er trimestre créé avec succès.');  
    }  

    public function storeSecondQuarter(StoreFormulaireRequest $request)  
    {  
        Formulaire::create([  
            'trimestre' => '2ème trimestre',  
            'compagnie_id' => Auth::user()->compagnie_id,  
            'users_id' => Auth::user()->id,    
        ]);  
        return redirect()->route('mensuel.index')->with('success', 'Formulaire pour le 2ème trimestre créé avec succès.');  
    }  

    public function storeThirdQuarter(StoreFormulaireRequest $request)  
    {  
        Formulaire::create([  
            'trimestre' => '3ème trimestre',  
            'compagnie_id' => Auth::user()->compagnie_id,  
            'users_id' => Auth::user()->id,   
        ]);  
        return redirect()->route('mensuel.index')->with('success', 'Formulaire pour le 3ème trimestre créé avec succès.');  
    }  

    public function storeFourthQuarter(StoreFormulaireRequest $request)  
    {  
        Formulaire::create([  
            'trimestre' => '4ème trimestre',  
            'compagnie_id' => Auth::user()->compagnie_id,  
            'users_id' => Auth::user()->id,   
        ]);  
        return redirect()->route('mensuel.index')->with('success', 'Formulaire pour le 4ème trimestre créé avec succès.');  
    } 

    /**  
     * Display the specified resource.  
     */  
    // public function show(Formulaire $formulaire)  
    // {  
    //     // Implémentez cette méthode si nécessaire  
    // }  

    /**  
     * Show the form for editing the specified resource.  
     */  
    public function edit(Formulaire $formulaire)  
    {  
        return view('formulaire.edit', compact('formulaire')); // Ajoutez une vue pour l'édition  
    }  

    /**  
     * Update the specified resource in storage.  
     */  
    public function update(UpdateFormulaireRequest $request, Formulaire $formulaire)  
    {  
        $validatedData = $request->validated();  
        // Ajoutez ici la logique pour mettre à jour le formulaire  
        $formulaire->update($validatedData);  

        return redirect()->route('formulaire.index')  
                ->withSuccess('Le formulaire a été mis à jour avec succès.');  
    }  

    /**  
     * Remove the specified resource from storage.  
     */  
    public function destroy(Formulaire $formulaire)  
    {  
        $formulaire->delete(); // Supprimez le formulaire  
        return redirect()->route('formulaire.index')  
                ->withSuccess('Le formulaire a été supprimé avec succès.');  
    }  

    public function listTrimesters()  
    {  
        $trimesters = [  
            '1ème trimestre' => 'du 1er janvier au 31 mars',  
            '2ème trimestre' => 'du 1er avril au 30 juin',  
            '3ème trimestre' => 'du 1er juillet au 30 septembre',  
            '4ème trimestre' => 'du 1er octobre au 31 décembre',  
        ];  

        $currentUserCompagnieId = Auth::user()->compagnie_id;  

        // Requête pour récupérer les données  
        $cabilletteries = Cabilletteries::select('compagnie_id', 'trimestre', DB::raw('COUNT(*) as total'))  
            ->where('compagnie_id', $currentUserCompagnieId) // Filtre par compagnie_id de l'utilisateur  
            ->groupBy('compagnie_id', 'trimestre')  
            ->get();  

        // Transformez le résultat en tableau associatif  
        $disabledTrimesters = [];  
        foreach ($cabilletteries as $cabil) {  
            // Concaténation pour formater la clé  
            $key = is_numeric($cabil->trimestre) ? $cabil->trimestre . 'ème trimestre' : $cabil->trimestre;  

            // Vérifie si la clé dans les trimestres est valide  
            if (array_key_exists($key, $trimesters)) {  
                $disabledTrimesters[$key] = $cabil->total > 0; // Si total > 0, on désactive  
            }  
        }  
        // dd($disabledTrimesters);

        return view('formulaire.trimesters', compact('trimesters', 'disabledTrimesters'));   
    }
}