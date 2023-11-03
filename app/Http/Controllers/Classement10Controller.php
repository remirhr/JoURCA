<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement10Request;
use App\Models\Classement10;
use Illuminate\Http\Request;

class Classement10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement10List = Classement10::orderBy('id')->take(3)->get();        
        return view('classement10.list', ['classement10List' => $classement10List]);
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
        return view('classement10.show', ['classement10' => Classement10::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement10.edit', ['classement10' => Classement10::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement10Request $request, Classement10 $classement10)
    {
        $request->validated();
        $classement10->update($request->input());
        return redirect()->route('classement10.show', ['classement10' => $classement10]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement10 = Classement10::findOrFail($id);
        $classement10->delete();
        return redirect()->route('classement10.index');
    }
}
