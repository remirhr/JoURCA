<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement13Request;
use App\Models\Classement13;
use Illuminate\Http\Request;

class Classement13Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement13List = Classement13::orderBy('id')->take(3)->get();        
        return view('classement13.list', ['classement13List' => $classement13List]);
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
        return view('classement13.show', ['classement13' => Classement13::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement13.edit', ['classement13' => Classement13::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement13Request $request, Classement13 $classement13)
    {
        $request->validated();
        $classement13->update($request->input());
        return redirect()->route('classement13.show', ['classement13' => $classement13]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement13 = Classement13::findOrFail($id);
        $classement13->delete();
        return redirect()->route('classement13.index');
    }
}
