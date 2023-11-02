<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement3Request;
use App\Models\Classement3;
use Illuminate\Http\Request;

class Classement3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement3List = Classement3::orderBy('id')->take(3)->get();        
return view('classement3.list', ['classement3List' => $classement3List]);
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
        return view('classement3.show', ['classement3' => Classement3::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement3.edit', ['classement3' => Classement3::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement3Request $request, Classement3 $classement3)
    {
        $request->validated();
        $classement3->update($request->input());
        return redirect()->route('classement3.show', ['classement3' => $classement3]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement3 = Classement3::findOrFail($id);
        $classement3->delete();
        return redirect()->route('classement3.index');
    }
}
