<?php

namespace App\Http\Controllers;

use App\Models\Aria;
use Illuminate\Http\Request;

class AriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arial = Aria::find(1);
        return $arial->ticket;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aria $aria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aria $aria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aria $aria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aria $aria)
    {
        //
    }
}
