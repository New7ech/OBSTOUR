<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Activite;
use App\Models\Barometre;
use App\Models\Billetsaerienne;
use App\Models\Cabilletteries;
use App\Models\Cacircuits;
use App\Models\Compagnie;
use App\Models\Emploi;
use App\Models\Nbbilletdests;
use App\Models\User;
use App\Models\Vactivite;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutputController extends Controller
{
    public function index()
    {
        return view('output.index');
    }
    public function autre()
    {
        return view('output.autre');
    }
    public function sinare()
    {
        $barometre = Barometre::all();
        $vactivite = Vactivite::all();
        $cacircuits = Cacircuits::all();
        $zone = Zone::all();
        $nbbilletdests = Nbbilletdests::all();
        $billetsaerienne = Billetsaerienne::all();
        $cabilletteries = Cabilletteries::all();
        $activite = Activite::all();
        $emploi = Emploi::all();

        return view('output.sinare', compact('barometre',
         'vactivite', 'cacircuits', 'zone',
          'nbbilletdests', 'billetsaerienne',
           'cabilletteries', 'activite', 'emploi'));
    }

    public function barometre()
    {

        $barometre = Barometre::all();
        return view('output.barometre', compact('barometre'));
    }

    public function vactivite()
    {

        $vactivite = Vactivite::all();
        return view('output.vactivite', compact('vactivite'));
    }

    public function cacircuits()
    {

        $cacircuits = Cacircuits::all();
        return view('output.cacircuits', compact('cacircuits'));
    }

    public function zone()
    {

        $zone = Zone::all();
        return view('output.zone', compact('zone'));
    }

    public function nbbilletdests()
    {

        $nbbilletdests = Nbbilletdests::all();
        return view('output.nbbilletdests', compact('nbbilletdests'));
    }

    public function billetsaerienne()
    {

        $billetsaerienne = Billetsaerienne::all();
        return view('output.billetsaerienne', compact('billetsaerienne'));
    }

    public function cabilletteries()
    {

        $cabilletteries = Cabilletteries::all();
        return view('output.cabilletteries', compact('cabilletteries'));
    }

    public function activite()
    {

        $activite = Activite::all();
        return view('output.activite', compact('activite'));
    }

    public function emploi()
    {
        $emploi = Emploi::all();
        return view('output.emploi', compact('emploi'));
    }

    public function userRecord(Request $request)
    {
        $users = User::all(); // Récupérer tous les utilisateurs

        $cacircuits = [];
        $cabilletteries = [];

        // Vérifiez si un utilisateur a été sélectionné
        if ($request->isMethod('post')) {
            $userId = $request->input('user_id');

            // Récupérer les enregistrements associés à l'utilisateur
            $cacircuits = Cacircuits::where('users_id', $userId)->get();
            $cabilletteries = Cabilletteries::where('users_id', $userId)->get();
        }
        return view('output.user_record', compact('users', 'cacircuits', 'cabilletteries'));
    }
    public function formulaire(Request $request)  
    {  
        // Récupération des compagnies pour le dropdown  
        $compagnies = Compagnie::all();  

        // Initialisation de la requête  
        $query = Cacircuits::with('compagnie');  

        // Filtrer par année si le paramètre est présent  
        if ($request->has('annee') && $request->annee) {  
            $query->whereYear('created_at', $request->annee);  
        }  

        // Filtrer par compagnie si le paramètre est présent  
        if ($request->has('compagnie_id') && $request->compagnie_id) {  
            $query->where('compagnie_id', $request->compagnie_id);  
        }  

        // Exécuter la requête et récupérer les résultats  
        $cacircuits = $query->get();  

        return view('output.formulaire', compact('cacircuits', 'compagnies'));  
    }

    public function userRecordsFromExistingUsers(Request $request)
    {
        // Récupérer les IDs des utilisateurs présents dans les Cacircuits
        $userIdsFromCacircuits = Cacircuits::pluck('users_id')->unique();

        // Récupérer les IDs des utilisateurs présents dans les Cabilletteries
        $userIdsFromCabilletteries = Cabilletteries::pluck('users_id')->unique();

        // Combiner les IDs et sélectionner uniquement ceux qui sont uniques
        $allUserIds = $userIdsFromCacircuits->merge($userIdsFromCabilletteries)->unique();

        // Récupérer tous les utilisateurs correspondant aux IDs
        $users = User::whereIn('id', $allUserIds)->get();

        // Initialiser les tableaux pour les enregistrements
        $cacircuits = [];
        $cabilletteries = [];

        // Vérifiez si des utilisateurs existent
        if ($users->isNotEmpty()) {
            // Récupérer l'ID du premier utilisateur trouvé
            $userId = $users->first()->id;

            // Récupérer les enregistrements associés à cet utilisateur
            $cacircuits = Cacircuits::where('users_id', $userId)->get();
            $cabilletteries = Cabilletteries::where('users_id', $userId)->get();
        }

        return view('output.userwork', compact('users', 'cacircuits', 'cabilletteries'));
    }

    public function userRecordsById($id)  
    {  
        // Pagination des enregistrements Activité, Billets, Emploi, etc.  
        $activite = Activite::where('users_id', $id)->latest()->paginate(3);  
        $nbbilletcompa = Billetsaerienne::where('users_id', $id)->latest()->paginate(3);  
        $emploi = Emploi::where('users_id', $id)->latest()->paginate(3);  
        $nbbilletdests = Nbbilletdests::where('users_id', $id)->latest()->paginate(3);  
        $vactivite = Vactivite::where('users_id', $id)->latest()->paginate(3);  
        $zone = Zone::where('users_id', $id)->latest()->paginate(3);  

        // Récupérer les enregistrements Cacircuits et Cabilletteries de l'utilisateur par ID  
        $cacircuits = Cacircuits::where('users_id', $id)->latest()->paginate(3);  
        $cabilletteries = Cabilletteries::where('users_id', $id)->latest()->paginate(3);  

        // Récupérer toutes les compagnies  
        $compagnie = Compagnie::all();  

        // Récupérer l'utilisateur pour l'affichage  
        $user = User::find($id);  

        return view('output.user_details', compact('user', 'cacircuits', 'cabilletteries', 'compagnie',   
                                'vactivite', 'zone','nbbilletdests', 'nbbilletcompa','activite', 'emploi'));  
    }


    // public function showUserRecords(Request $request)
    // {
    //     // Validation de l'ID utilisateur
    //     $request->validate([
    //         'user_id' => 'required|exists:cacircuits,user_id',
    //     ]);

    //     // Récupération des enregistrements en fonction de user_id
    //     $userId = $request->input('user_id');
    //     $cacircuits = Cacircuits::where('user_id', $userId)->get();

    //     // Passer les données à la vue
    //     return view('user.records', compact('cacircuits'));
    // }

    // Méthode qui gère la requête pour afficher les statistiques
    public function statistique()
    {
        // Requête pour récupérer et regrouper les enregistrements par compagnie
        $companies = Cacircuits::select('compagnie_id', DB::raw('COUNT(*) as total'))
            ->groupBy('compagnie_id') // Groupe les enregistrements par compagnie_id
            ->with('compagnie') // Charge le modèle Compagnie associé à chaque enregistrement
            ->get(); // Exécute la requête et récupère les résultats

        // Retourne la vue 'statistique' avec les données des compagnies
        // return view('statistique');
        return view('output.statistique', compact('companies'));
    }

}
