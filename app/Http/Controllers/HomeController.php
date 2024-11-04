<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class HomeController extends Controller
{
    public function create()
    {
        // Logic to show the form for creating a new resource
        return view('dashboard');
    }

    public function store(Request $request)
    {
        // Logic to create a new resource
        $validateData = $request->validate([]);
        Dictionary::create($validateData);
        return back()->with('success');
    }
    public function show($id)
    {
        // Logic to retrieve a specific resource
        $dictionary = Dictionary::findOrFail($id);
        return view('dashboard', compact('dictionary'));
    }

    public function edit($id)
    {
        // Logic to show the form for editing a specific resource
    }
    public function update(Request $request, $id)
    {
        // Logic to update an existing resource
    }

    public function destroy($id)
    {
        // Logic to delete a specific resource
    }
}
