<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement7Request;
use App\Models\Classement7;
use Illuminate\Http\Request;

class Classement7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement7List = Classement7::orderBy('id')->take(3)->get();        
        return view('classement7.list', ['classement7List' => $classement7List]);
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
    public function show(string $id)
    {
        return view('classement7.show', ['classement7' => Classement7::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement7.edit', ['classement7' => Classement7::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement7Request $request, Classement7 $classement7)
    {
        $request->validated();
        $classement7->update($request->input());
        return redirect()->route('classement7.show', ['classement7' => $classement7]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement7 = Classement7::findOrFail($id);
        $classement7->delete();
        return redirect()->route('classement7.index');
    }
}
