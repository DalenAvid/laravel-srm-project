<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index', compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('managers.create');
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

        Manager::create($request->all());

        return redirect()->route('managers.index')->with('success', 'Manager created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $manager = Manager::find($id);
        return view('managers.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $manager = Manager::find($id);
        return view('managers.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Manager $manager)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required|email',
        ]);

        $manager->update($request->all());

        return redirect()->route('managers.index')->with('success', 'Manager updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manager $manager)
    {
        $manager->delete();

        return redirect()->route('managers.index')->with('success', 'Manager deleted successfully');
    }
}
