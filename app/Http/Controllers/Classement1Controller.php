<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement1Request;
use App\Models\classement1;
use Illuminate\Http\Request;

class Classement1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement1List = classement1::orderBy('id')->take(3)->get();        
return view('classement1.list', ['classement1List' => $classement1List]);
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
        return view('classement1.show', ['classement1' => Classement1::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement1.edit', ['classement1' => Classement1::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement1Request $request, Classement1 $classement1)
{
    $request->validated();
    $classement1->update($request->input());
    return redirect()->route('classement1.show', ['classement1' => $classement1]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement1 = Classement1::findOrFail($id);
        $classement1->delete();
        return redirect()->route('classement1.index');
    }
}
