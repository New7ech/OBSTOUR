<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Compagnie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display the login view.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Handle custom login request.
     */
    public function customLogin(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            return redirect()->intended('/')
                    ->withSuccess('Vous êtes connecté avec succès.');
        }

        return redirect("login")->withErrors(['emailPassword' => 'Adresse e-mail ou mot de passe incorrect.']);
    }

    /**
     * Show the registration form.
     */
    public function registration()
    {
        // Récupérer les compagnies pour le select
        $compagnies = Compagnie::all();
        return view('auth.registration', compact('compagnies'));
    }

    /**
     * Handle custom registration request.
     */
    public function customRegistration(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $this->create($validated);

        return redirect("/")->withSuccess('Inscription réussie, vous êtes maintenant connecté.');
    }

    /**
     * Create a new user instance.
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
    }

    /**
     * Handle custom registration request with company ID.
     */
    public function registerCustom(Request $request)
    {
        // Valider les données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'compagnie_id' => 'required|exists:compagnie,id', // Validation que l'ID existe
        ]);

        // Créer l'utilisateur avec la compagnie
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'compagnie_id' => $validated['compagnie_id'], // Stocker l'ID de la compagnie
        ]);

        // Authentifier l'utilisateur, redirection, etc.
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Compte créé avec succès !');
    }

    /**
     * Display dashboard if authenticated.
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('auth.dashboard');
        }

        return redirect("login")->withSuccess('Vous n\'êtes pas autorisé à accéder à cette page.');
    }

    /**
     * Handle user logout and session clean up.
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return redirect('login')->withSuccess('Vous êtes déconnecté.');
    }
}
