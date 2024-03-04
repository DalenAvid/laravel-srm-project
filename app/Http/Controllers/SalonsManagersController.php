<?php

namespace App\Http\Controllers;

use App\Models\Salons_managers;
use Illuminate\Http\Request;

class SalonsManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons_managers = Salons_managers::all();
        return view('salons_managers.index', compact('salons_managers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salons_managers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'salon_id' => 'required',
            'manager_id' => 'required',
        ]);//під питанням
    }

    /**
     * Display the specified resource.
     */
    public function show(Salons_managers $salons_managers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salons_managers $salons_managers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salons_managers $salons_managers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salons_managers $salons_managers)
    {
        
    }
}
