<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement4Request;
use App\Models\Classement4;
use Illuminate\Http\Request;

class Classement4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement4List = Classement4::orderBy('id')->take(3)->get();        
        return view('classement4.list', ['classement4List' => $classement4List]);
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
        return view('classement4.show', ['classement4' => Classement4::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement4.edit', ['classement4' => Classement4::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement4Request $request, Classement4 $classement4)
    {
        $request->validated();
        $classement4->update($request->input());
        return redirect()->route('classement4.show', ['classement4' => $classement4]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement4 = Classement4::findOrFail($id);
        $classement4->delete();
        return redirect()->route('classement4.index');
    }
}
