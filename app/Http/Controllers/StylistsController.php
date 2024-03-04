<?php

namespace App\Http\Controllers;

use App\Models\Stylists;
use Illuminate\Http\Request;

class StylistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stylists = Stylists::all();
        return view('stylists.index', compact('stylists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stylists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required|email',
        ]);

        Stylists::create($request->all());

        return redirect()->route('stylists.index')->with('success', 'Stylist created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $stylist = Stylists::find($id);
        return view('stylists.show', compact('stylist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stylist = Stylists::find($id);
        return view('stylists.edit', compact('stylist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stylists $stylist)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required|email',
        ]);

        $stylist->update($request->all());

        return redirect()->route('stylists.index')->with('success', 'Stylist updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stylists $stylist)
    {
        $stylist->delete();

        return redirect()->route('stylists.index')->with('success', 'Stylist deleted successfully');
    }
}
