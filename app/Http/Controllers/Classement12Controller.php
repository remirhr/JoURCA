<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement12Request;
use App\Models\Classement12;
use Illuminate\Http\Request;

class Classement12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement12List = Classement12::orderBy('id')->take(3)->get();        
        return view('classement12.list', ['classement12List' => $classement12List]);
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
        return view('classement12.show', ['classement12' => Classement12::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement12.edit', ['classement12' => Classement12::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement12Request $request, Classement12 $classement12)
    {
        $request->validated();
        $classement12->update($request->input());
        return redirect()->route('classement12.show', ['classement12' => $classement12]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement12 = Classement12::findOrFail($id);
        $classement12->delete();
        return redirect()->route('classement12.index');
    }
}