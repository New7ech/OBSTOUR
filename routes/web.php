<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\BarometreController;
use App\Http\Controllers\BilletsaerienneController;
use App\Http\Controllers\CabilletteriesController;
use App\Http\Controllers\CacircuitsController;
use App\Http\Controllers\CompagnieController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\NbbilletdestsController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatistiqueController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\VactiviteController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\FormulairebarController;
use App\Http\Controllers\FormulaireETHController;
use App\Http\Controllers\InitaliserController;
use App\Http\Controllers\MensuelController;
use App\Http\Controllers\MensuelFormController;
use App\Models\Formulaire;
use App\Models\FormulaireETH;
use App\Models\Formulaires;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;


// Middleware pour protéger ces routes
Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    // formulaire destiner au eth
    Route::resource('FormulaireETH', FormulaireETHController::class);


    // les activites connexe
    Route::resource('activite', ActiviteController::class);

    // les Barometres
    Route::resource('barometres', BarometreController::class);

    // les Barometres trimestriel
    Route::resource('cabilletteries', CabilletteriesController::class);
    // Route::get('/cabilletteries/liste', [CabilletteriesController::class, 'liste'])->name('cabilletteries.liste');

    // les chifre circuit
    Route::resource('cacircuits', CacircuitsController::class);

    // les compagnie aerienne
    Route::resource('compagnie', CompagnieController::class);

    // les emploies
    Route::resource('emploies', EmploiController::class);

    // les nombre de billet emis par compagnies
    Route::resource('nbbilletcompa', BilletsaerienneController::class);

    // les nombre de billet emis a destination
    Route::resource('nbbilletdests', NbbilletdestsController::class);

    // le controller de l'initialisation
    Route::resource('initialisation', InitaliserController::class);

    // les Statistique
    Route::resource('statistique', StatistiqueController::class);
    Route::get('/statistique/aide', [StatistiqueController::class, 'aide'])->name('statistique.aide');
    

    // les Volume d'activites
    Route::resource('vactivite', VactiviteController::class);

    // les zone de provenance des touriste
    Route::resource('zone', ZoneController::class);

    // enregistrement des mois pour les compagnies
    Route::resource('mensuelform', MensuelFormController::class);
    Route::get('/statistiques', [MensuelFormController::class, 'statistiques']);  

    //les enregistrement mensuel
    Route::resource('mensuel', MensuelController::class);  
 
    // Ajoutez également les routes pour store, show, edit, update, et destroy si nécessaire  


    // Route::get('/formulaire', [FormulaireController::class, 'index'])->name('formulaire.index'); 
    Route::get('/trimestres', [FormulaireController::class, 'index']); 
    Route::get('/formulaire/create/{mensuel}', [FormulaireController::class, 'create'])->name('formulaire.create');  
    Route::post('/formulaire', [FormulaireController::class, 'store'])->name('formulaire.store');  
    Route::get('/formulaire/{formulaire}/edit', [FormulaireController::class, 'edit'])->name('formulaire.edit');  
    Route::put('/formulaire/{formulaire}', [FormulaireController::class, 'update'])->name('formulaire.update');  
    Route::delete('/formulaire/{formulaire}', [FormulaireController::class, 'destroy'])->name('formulaire.destroy');  
    Route::get('/formulaire/trimesters', [FormulaireController::class, 'listTrimesters'])->name('formulaire.trimesters');  
    Route::post('/formulaire/store-first-quarter', [FormulaireController::class, 'storeFirstQuarter'])->name('formulaire.storeFirstQuarter');  
    Route::post('/formulaire/store-second-quarter', [FormulaireController::class, 'storeSecondQuarter'])->name('formulaire.storeSecondQuarter');  
    Route::post('/formulaire/store-third-quarter', [FormulaireController::class, 'storeThirdQuarter'])->name('formulaire.storeThirdQuarter');  
    Route::post('/formulaire/store-fourth-quarter', [FormulaireController::class, 'storeFourthQuarter'])->name('formulaire.storeFourthQuarter');  


    //formulaire du barometre trimestriel
    Route::get('/trimestre', [FormulairebarController::class, 'index']); 
    Route::get('/formulairebarometre/create', [FormulairebarController::class, 'create'])->name('formulairebarometre.create');  
    Route::post('/formulairebarometre', [FormulairebarController::class, 'store'])->name('formulairebarometre.store');  
    Route::get('/formulairebarometre/{formulaire}/edit', [FormulairebarController::class, 'edit'])->name('formulairebarometre.edit');  
    Route::put('/formulairebarometre/{formulaire}', [FormulairebarController::class, 'update'])->name('formulairebarometre.update');  
    Route::delete('/formulairebarometre/{formulaire}', [FormulairebarController::class, 'destroy'])->name('formulairebarometre.destroy');  
    Route::get('/formulairebarometre/trimesters', [FormulairebarController::class, 'listTrimesters'])->name('formulairebarometre.trimesters');  

    //le output pout la partie obstour
        // Routes pour le profil utilisateur
    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
    Route::put('/profile', [UserProfileController::class, 'update'])->name('profile.update');

    //affichage des donnes dans output
    Route::get('/output', [OutputController::class, 'index']);
    Route::get('/output/statistique', [OutputController::class, 'statistique']);
    Route::get('/output/autre', [OutputController::class, 'autre']);
    Route::get('/output/barometre', [OutputController::class, 'barometre']);
    Route::get('/output/vactivite', [OutputController::class, 'vactivite']);
    Route::get('/output/cacircuits', [OutputController::class, 'cacircuits']);
    Route::get('/output/zone', [OutputController::class, 'zone']);
    Route::get('/output/nbbilletdests', [OutputController::class, 'nbbilletdests']);
    Route::get('/output/billetsaerienne', [OutputController::class, 'billetsaerienne']);
    Route::get('/output/cabilletteries', [OutputController::class, 'cabilletteries']);
    Route::get('/output/activite', [OutputController::class, 'activite']);
    Route::get('/output/emploi', [OutputController::class, 'emploi']);
    Route::get('/output/sinare', [OutputController::class, 'sinare']);
    Route::get('/output/formulaire', [OutputController::class, 'formulaire'])->name('output.formulaire');
    // Route::get('/output/records', [OutputController::class, 'showUserRecords'])->name('output.records');
    Route::match(['get', 'post'], '/output/user-record', [OutputController::class, 'userRecord'])->name('user.record');
    Route::get('/output/userwork', [OutputController::class, 'userRecordsFromExistingUsers'])->name('user.records');
    // Route pour afficher les enregistrements d'un utilisateur spécifique
    Route::get('/user-records/{id}', [OutputController::class, 'userRecordsById'])->name('user.records.show');

    //la gestion des utilisateurs
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/deconnexion', [UserController::class, 'deconnexion'])->name('deconnexion');
});

// Routes publiques
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/connexion', [UserController::class, 'connexion'])->name('connexion');


    // Utilisateur
//     Route::get('dashboard', [UserController::class, 'dashboard']);
// //

// // Routes pour l'authentification
//     // Routes pour la connexion
//     Route::get('login', [UserController::class, 'index'])->name('login');
//     Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');

//     // Routes pour l'enregistrement
//     Route::get('registration', [UserController::class, 'registration'])->name('register-user');
//     Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');

//     // Route pour la déconnexion
//     Route::get('signout', [UserController::class, 'signOut'])->name('signout');

//     // Routes pour gérer les utilisateurs
//     Route::get('/auth', [UserController::class, 'listUsers'])->name('auth.list'); // Pour afficher la liste des utilisateurs
//     Route::get('/auth/{id}', [UserController::class, 'viewUser'])->name('auth.view'); // Pour afficher les détails d'un utilisateur

//     // Routes pour éditer un utilisateur
//     Route::get('/auth/{id}/edit', [UserController::class, 'editUser'])->name('auth.edit'); // Pour afficher le formulaire d'édition
//     Route::post('/auth/{id}', [UserController::class, 'updateUser'])->name('auth.update'); // Pour traiter la mise à jour
//     Route::post('/auth', [UserController::class, 'store'])->name('auth.store'); // Pour enregistrer un nouvel utilisateur
//     Route::delete('/auth/{id}', [UserController::class, 'destroy'])->name('auth.destroy'); // Pour supprimer un utilisateur


// fonction de test
// Route::get('/attach', function(){
//     $user = User::first();
//     $compagnie = Compagnie::first();
//     $compagnie->users()->save($user);
// });
