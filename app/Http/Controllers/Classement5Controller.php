<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement5Request;
use App\Models\Classement5;
use Illuminate\Http\Request;

class Classement5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement5List = Classement5::orderBy('id')->take(3)->get();        
        return view('classement5.list', ['classement5List' => $classement5List]);
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
        return view('classement5.show', ['classement5' => Classement5::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement5.edit', ['classement5' => Classement5::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement5Request $request, Classement5 $classement5)
    {
        $request->validated();
        $classement5->update($request->input());
        return redirect()->route('classement5.show', ['classement5' => $classement5]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement5 = Classement5::findOrFail($id);
        $classement5->delete();
        return redirect()->route('classement5.index');
    }
}
