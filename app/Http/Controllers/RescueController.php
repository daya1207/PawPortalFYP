<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RescueController extends Controller
{
    public function index()
    {
        // Return the rescue page (emergency tips & form)
        return view('rescue.index');
    }

  // use App\Models\RescueReport;

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        // ...
    ]);

    RescueReport::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'date' => $request->date,
        'time' => $request->time,
        'details' => $request->details,
    ]);

    return redirect()->route('rescue.index')
        ->with('success', 'Emergency report submitted successfully!');
}

}
