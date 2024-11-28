<?php

namespace App\Http\Controllers;

use App\Models\FormulaireETH;
use App\Http\Requests\StoreFormulaireETHRequest;
use App\Http\Requests\UpdateFormulaireETHRequest;

class FormulaireETHController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ETH.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormulaireETHRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FormulaireETH $formulaireETH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormulaireETH $formulaireETH)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormulaireETHRequest $request, FormulaireETH $formulaireETH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormulaireETH $formulaireETH)
    {
        //
    }
}
