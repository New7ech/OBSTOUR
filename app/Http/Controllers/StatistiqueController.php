<?php

namespace App\Http\Controllers;

use App\Models\Statistique;
use App\Models\Cabilletteries;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatistiqueRequest;
use App\Http\Requests\UpdateStatistiqueRequest;

class StatistiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('statistique.index', [
            'cabillettery' => Cabilletteries::latest()->paginate(10)
        ]);
    }
    public function aide()
    {
        return view('statistique.index', [
            'cabillettery' => Cabilletteries::latest()->paginate(10)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatistiqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistique $statistique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistique $statistique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatistiqueRequest $request, Statistique $statistique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistique $statistique)
    {
        //
    }
}
