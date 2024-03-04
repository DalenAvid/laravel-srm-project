<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons = Salon::all();
        return view('salons.index', compact('salons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required|email',
        ]);

        Salon::create($request->all());

        return redirect()->route('salons.index')->with('success', 'Salon created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $salon = Salon::find($id);
        return view('salons.show', compact('salon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $salon = Salon::find($id);
        return view('salons.edit', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salon $salon)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required|email',
        ]);

        $salon->update($request->all());

        return redirect()->route('salons.index')->with('success', 'Salon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salon $salon)
    {
        $salon->delete();

        return redirect()->route('salons.index')->with('success', 'Salon deleted successfully');
    }
}
