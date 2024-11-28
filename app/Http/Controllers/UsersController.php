<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Compagnie;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }

    public function registration()
    {
        // Ajoutez une logique pour récupérer les compagnies si nécessaire
        $compagnies = Compagnie::all(); // Récupérez toutes les compagnies pour le formulaire
        $roles = Role::all(); // Récupérez tous les rôles pour le formulaire
        return view('auth.registration', compact('compagnies', 'roles'));
    }

    public function customRegistration(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'compagnie_id' => 'nullable|exists:compagnies,id',
        'roles_id' => 'required|exists:roles,id', // Validate the role ID
    ]);

    $data = $request->all();
    $user = $this->create($data);

    $role = Role::find(intval($request->role_id)); // Retrieve the role using the ID
    $user->assignRole($role->name); // Assign the role to the user using the role name

    return redirect("/")->withSuccess('You have successfully created an account!');
}


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'compagnie_id' => $data['compagnie_id'] ,// Enregistrez l'ID de la compagnie
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }

        return redirect("login")->withSuccess('Vous n\'êtes pas autorisé à accéder à cette page.');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
    public function listUsers()
    {
        $users = User::with('compagnie')->get(); // Récupérez tous les utilisateurs avec leurs compagnies
        $currentUser = Auth::user();
        return view('auth.list', compact('users')); // Retournez la vue pour la liste des utilisateurs
    }

    public function viewUser($id)
    {
        $user = User::with('compagnie')->findOrFail($id); // Trouvez l'utilisateur ou retournez une erreur 404
        return view('auth.view', compact('user')); // Retournez la vue pour afficher les détails de l'utilisateur
    }

    public function editUser($id)
    {
        $user = User::with('compagnie')->findOrFail($id); // Trouvez l'utilisateur ou retournez une erreur 404
        $compagnies = Compagnie::all(); // Récupérez toutes les compagnies pour le dropdown
        return view('auth.edit', compact('user', 'compagnies')); // Retournez la vue pour le formulaire d'édition
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'compagnie_id' => 'nullable|exists:compagnies,id', // Validation pour la compagnie
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->compagnie_id = $request->compagnie_id; // Mettre à jour la compagnie
        $user->save(); // Sauvegarder les modifications

        return redirect()->route('auth.list')->with('success', 'Utilisateur mis à jour avec succès !'); // Redirigez vers la liste avec un message de succès
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete(); // Supprimer l'utilisateur

        return redirect()->route('auth.list')->with('success', 'Utilisateur supprimé avec succès !'); // Rediriger avec un message
    }
    public function store(Request $request)
    {
        // Vous pouvez décider de faire appel à la méthode `customRegistration()` ici
        return $this->customRegistration($request); // Réutiliser pour créer un nouvel utilisateur
    }
}
