<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement6Request;
use App\Models\Classement6;
use Illuminate\Http\Request;

class Classement6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement6List = Classement6::orderBy('id')->take(3)->get();        
        return view('classement6.list', ['classement6List' => $classement6List]);
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
        return view('classement6.show', ['classement6' => Classement6::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement6.edit', ['classement6' => Classement6::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement6Request $request, Classement6 $classement6)
    {
        $request->validated();
        $classement6->update($request->input());
        return redirect()->route('classement6.show', ['classement6' => $classement6]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement6 = Classement6::findOrFail($id);
        $classement6->delete();
        return redirect()->route('classement6.index');
    }
}
