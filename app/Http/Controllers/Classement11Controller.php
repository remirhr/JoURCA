<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement11Request;
use App\Models\Classement11;
use Illuminate\Http\Request;

class Classement11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement11List = Classement11::orderBy('id')->take(3)->get();        
        return view('classement11.list', ['classement11List' => $classement11List]);
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
        return view('classement11.show', ['classement11' => Classement11::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement11.edit', ['classement11' => Classement11::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement11Request $request, Classement11 $classement11)
    {
        $request->validated();
        $classement11->update($request->input());
        return redirect()->route('classement11.show', ['classement11' => $classement11]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement11 = Classement11::findOrFail($id);
        $classement11->delete();
        return redirect()->route('classement11.index');
    }
}
