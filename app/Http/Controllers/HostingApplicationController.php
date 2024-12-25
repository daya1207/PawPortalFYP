<?php

namespace App\Http\Controllers;

use App\Models\HostingApplication;
use Illuminate\Http\Request;

class HostingApplicationController extends Controller
{
    // 1. List all records
    public function index()
    {
        $applications = HostingApplication::all();
        return view('hosting_applications.index', compact('applications'));
    }

    // 2. Show form to create a new record
    public function create()
    {
        return view('hosting_applications.create');
    }

    // 3. Store data (form submission) in DB
    public function store(Request $request)
    {
        // Validate input if needed
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            // etc. for other fields...
        ]);

        // Create record
        HostingApplication::create([
            'name'           => $request->name,
            'phone'          => $request->phone,
            'number_of_cats' => $request->number_of_cats,
            'email'          => $request->email,
            'breed'          => $request->breed,
            'additional_info'=> $request->additional_info,
            'start_date'     => $request->start_date,
            'end_date'       => $request->end_date,
        ]);

        return redirect()->route('hosting_applications.index')
                         ->with('success', 'Hosting application submitted!');
    }

    // 4. Display a single record
    public function show(HostingApplication $hostingApplication)
    {
        return view('hosting_applications.show', compact('hostingApplication'));
    }

    // 5. Show edit form
    public function edit(HostingApplication $hostingApplication)
    {
        return view('hosting_applications.edit', compact('hostingApplication'));
    }

    // 6. Update the record
    public function update(Request $request, HostingApplication $hostingApplication)
    {
        $request->validate([
            'name' => 'required',
            // etc...
        ]);

        $hostingApplication->update([
            'name'           => $request->name,
            'phone'          => $request->phone,
            'number_of_cats' => $request->number_of_cats,
            'email'          => $request->email,
            'breed'          => $request->breed,
            'additional_info'=> $request->additional_info,
            'start_date'     => $request->start_date,
            'end_date'       => $request->end_date,
        ]);

        return redirect()->route('hosting_applications.index')
                         ->with('success', 'Hosting application updated!');
    }

    // 7. Delete the record
    public function destroy(HostingApplication $hostingApplication)
    {
        $hostingApplication->delete();
        return redirect()->route('hosting_applications.index')
                         ->with('success', 'Application deleted!');
    }
}

