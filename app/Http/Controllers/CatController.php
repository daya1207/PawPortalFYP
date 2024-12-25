<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    // 1. Display a listing of cats
    public function index()
    {
        $cats = Cat::all();
        return view('cats.index', compact('cats'));
    }

    // 2. Show the form for creating a new cat
    public function create()
    {
        return view('cats.create');
    }

    // 3. Store a newly created cat in DB
    public function store(Request $request)
    {
        // Validate if needed
        $request->validate([
            'name' => 'required',
            'age'  => 'required|integer',
            'breed'=> 'required',
        ]);

        // Create
        Cat::create([
            'name' => $request->name,
            'age' => $request->age,
            'breed' => $request->breed
        ]);

        return redirect()->route('cats.index')
                         ->with('success', 'Cat added successfully!');
    }

    // 4. Show a single cat
    public function show(Cat $cat)
    {
        return view('cats.show', compact('cat'));
    }

    // 5. Edit cat form
    public function edit(Cat $cat)
    {
        return view('cats.edit', compact('cat'));
    }

    // 6. Update cat in DB
    public function update(Request $request, Cat $cat)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'breed' => 'required',
        ]);

        $cat->update([
            'name' => $request->name,
            'age' => $request->age,
            'breed' => $request->breed
        ]);

        return redirect()->route('cats.index')
                         ->with('success', 'Cat updated successfully!');
    }

    // 7. Delete a cat
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return redirect()->route('cats.index')
                         ->with('success', 'Cat deleted successfully!');
    }
}

