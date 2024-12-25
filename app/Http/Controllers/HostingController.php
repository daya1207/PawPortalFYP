<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function index()
    {
        // Return the hosting page (foster application page)
        return view('hosting.index');
    }

    public function store(Request $request)
    {
        // Validate the hosting/foster form data
        $request->validate([
            'name'         => 'required',
            'phone'        => 'required',
            'email'        => 'required|email',
            'address'      => 'required',
            'number_of_cats' => 'required|integer|min:1',
            'age'          => 'required',
            'breed'        => 'required',
            'start_date'   => 'required|date',
            'end_date'     => 'required|date|after_or_equal:start_date',
            // Add more validations as needed...
        ]);

        // Example: store in DB (if you have a hosting_apps table)
        // HostingApplication::create([
        //   'name' => $request->name,
        //   ... etc ...
        // ]);

        // Or just do something else, like send an email...

        return redirect()->route('hosting.index')
            ->with('success', 'Your hosting application was submitted successfully!');
    }
}
