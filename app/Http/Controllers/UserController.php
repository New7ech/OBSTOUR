<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Spatie\Permission\Models\Role;
use App\Models\Compagnie;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get(); // Charge les utilisateurs avec leurs rôles
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $compagnies = Compagnie::all(); // Récupérez toutes les compagnies pour le formulaire
        $roles = Role::all();
        return view('users.create', compact('roles', 'compagnies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'compagnie_id' => 'nullable|exists:compagnies,id',
        ]);

        $user = User::create($request->only('name', 'email', 'password', 'compagnie_id'));

        // Synchroniser les rôles
        $user->syncRoles($request->roles);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $compagnies = Compagnie::all();
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles', 'compagnies'));
    }

    public function update(Request $request, User $user)  
    {  
        $request->validate([  
            'name' => 'required',  
            'email' => 'required|email|unique:users,email,' . $user->id,  
            'password' => 'nullable|min:8|confirmed', // Validation pour le mot de passe (optionnel)  
            'compagnie_id' => 'nullable|exists:compagnies,id',  
        ]);  

        // Récupérer les données à mettre à jour  
        $data = $request->only('name', 'email', 'compagnie_id');  

        // Vérifiez si un nouveau mot de passe est fourni  
        if ($request->filled('password')) {  
            $data['password'] = Hash::make($request->password); // Hachez le nouveau mot de passe  
        }  

        // Mettre à jour l'utilisateur avec les données  
        $user->update($data);  

        // Synchroniser les rôles  
        $user->syncRoles($request->roles);  

        return redirect()->route('users.index')  
            ->with('success', 'User updated successfully.');  
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully.');
    }

    // Méthode pour assigner un rôle à un utilisateur
    public function assignRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|exists:roles,name',
        ]);

        $user->assignRole($request->role);

        return redirect()->route('users.index')
            ->with('success', 'Role assigned successfully.');
    }

    // Méthode pour retirer un rôle d'un utilisateur
    public function removeRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|exists:roles,name',
        ]);

        $user->removeRole($request->role);

        return redirect()->route('users.index')
            ->with('success', 'Role removed successfully.');
    }

    // Méthode pour vérifier si un utilisateur a un rôle
    public function checkRole(User $user)
    {
        $hasRole = $user->hasRole('admin'); // Remplacez 'admin' par le rôle que vous souhaitez vérifier

        return response()->json(['hasRole' => $hasRole]);
    }

    // Méthode de connexion
    public function connexion(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard') // Remplacez 'dashboard' par la route vers laquelle vous souhaitez rediriger
                ->with('success', 'Vous êtes connecté avec succès.');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    // Méthode de déconnexion
    public function deconnexion()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login') // Remplacez 'login' par la route de votre page de connexion
            ->with('success', 'Vous êtes déconnecté avec succès.');
    }
}
