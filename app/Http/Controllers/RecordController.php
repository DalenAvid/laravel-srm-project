<?php

namespace App\Http\Controllers;

use App\Models\Record;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    // ...

    // ...

    public function stylistPanel()
{
    $records = Record::all();
    return view('stylistpanel', compact('records'));
}



    public function index()
    {
        $records = Record::all();
        return view('records.stylistpanel', compact('records'));
    }

    public function show($id)
    {
        $record = Record::find($id);
        return view('records.show', compact('record'));
    }
    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stylist' => 'required',
            'service' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
        $record = new Record();
        $record->stylist = $request->input('stylist');
        $record->service = $request->input('service');
        $record->name = $request->input('name');
        $record->phone = $request->input('phone');
        $record->date = $request->input('date');
        $record->time = $request->input('time');
        $record->message = $request->input('message');
        $record->save();
        return redirect()->route('index')->with('success', 'Record created successfully');
    }

    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();
        return redirect()->route('stylistpanel')->with('success', 'Record deleted successfully');
    }
    public function edit($id)
    {
        $record = Record::find($id);
        return view('records.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $record = Record::find($id);
        $record->stylist = $request->input('stylist');
        $record->service = $request->input('service');
        $record->name = $request->input('name');
        $record->phone = $request->input('phone');
        $record->date = $request->input('date');
        $record->time = $request->input('time');
        $record->message = $request->input('message');
        $record->save();
        return redirect()->route('records.stylistpanel')->with('success', 'Record updated successfully');
    }


}
