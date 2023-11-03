<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement9Request;
use App\Models\Classement9;
use Illuminate\Http\Request;

class Classement9Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement9List = Classement9::orderBy('id')->take(3)->get();        
        return view('classement9.list', ['classement9List' => $classement9List]);
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
        return view('classement9.show', ['classement9' => Classement9::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement9.edit', ['classement9' => Classement9::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement9Request $request, Classement9 $classement9)
    {
        $request->validated();
        $classement9->update($request->input());
        return redirect()->route('classement9.show', ['classement9' => $classement9]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement9 = Classement9::findOrFail($id);
        $classement9->delete();
        return redirect()->route('classement9.index');
    }
}
