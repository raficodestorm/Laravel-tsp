<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('bus.index', compact('buses'));
    }

    public function create()
    {
        return view('bus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'coach_no' => 'required|integer',
            'license' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'route' => 'required|string|max:255',
        ]);

        Bus::create($validated);

        return redirect()->route('buses.index')->with('success', 'Bus added successfully!');
    }

    public function show(Bus $bus)
    {
        //
    }

    public function edit(Bus $bus)
    {
        //
    }

    public function update(Request $request, Bus $bus)
    {
        //
    }

    public function destroy(Bus $bus)
    {
        //
    }
}
