<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement8Request;
use App\Models\Classement8;
use Illuminate\Http\Request;

class Classement8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement8List = Classement8::orderBy('id')->take(3)->get();        
        return view('classement8.list', ['classement8List' => $classement8List]);
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
        return view('classement8.show', ['classement8' => Classement8::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement8.edit', ['classement8' => Classement8::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement8Request $request, Classement8 $classement8)
    {
        $request->validated();
        $classement8->update($request->input());
        return redirect()->route('classement8.show', ['classement8' => $classement8]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement8 = Classement8::findOrFail($id);
        $classement8->delete();
        return redirect()->route('classement8.index');
    }
}
