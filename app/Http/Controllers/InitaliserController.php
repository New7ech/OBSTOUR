<?php

namespace App\Http\Controllers;

use App\Models\initialiser;
use App\Http\Requests\StoreinitialiserRequest;
use App\Http\Requests\UpdateinitialiserRequest;

class InitaliserController extends Controller
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
        return view('initialiser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinitialiserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(initialiser $initialiser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(initialiser $initialiser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinitialiserRequest $request, initialiser $initialiser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(initialiser $initialiser)
    {
        //
    }
}
