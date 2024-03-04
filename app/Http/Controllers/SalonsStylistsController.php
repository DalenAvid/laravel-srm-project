<?php

namespace App\Http\Controllers;

use App\Models\Salons_stylists;
use Illuminate\Http\Request;

class SalonsStylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons_stylists = Salons_stylists::all();
        return view('salons_stylists.index', compact('salons_stylists'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Salons_stylists $salons_stylists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salons_stylists $salons_stylists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salons_stylists $salons_stylists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salons_stylists $salons_stylists)
    {
        //
    }
}
