<?php

namespace App\Http\Controllers;

use App\Models\Compagnie;
use App\Http\Requests\StoreCompagnieRequest;
use App\Http\Requests\UpdateCompagnieRequest;
use Illuminate\Support\Facades\Auth; // N'oubliez pas d'inclure ce use

class CompagnieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compagnie = Compagnie::latest()->paginate(10); // Récupérez toutes les compagnies
        $utilisateurActuel = Auth::user(); // Récupérez l'utilisateur connecté
        return view('compagnie.index', compact('compagnie', 'utilisateurActuel')); // Passez les données à la vue
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('compagnie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompagnieRequest $request)
    {
        Compagnie::create($request->validated());
        return redirect()->route('compagnie.index')
                ->withSuccess('New product is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compagnie $compagnie)
    {
        return view('compagnie.show', compact('compagnie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compagnie $compagnie)
    {
        return view('compagnie.edit', compact('compagnie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompagnieRequest $request, Compagnie $compagnie)
    {
        $compagnie->update($request->validated());
        return redirect()->back()
                ->withSuccess('Product is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compagnie $compagnie)
    {
        $compagnie->delete();
        return redirect()->route('compagnie.index')
                ->withSuccess('Product is deleted successfully.');
    }
}
