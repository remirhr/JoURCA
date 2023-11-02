<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement2Request;
use App\Models\Classement2;
use Illuminate\Http\Request;

class Classement2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classement2List = Classement2::orderBy('id')->take(3)->get();        
return view('classement2.list', ['classement2List' => $classement2List]);
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
        return view('classement2.show', ['classement2' => Classement2::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('classement2.edit', ['classement2' => Classement2::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreClassement2Request $request, Classement2 $classement2)
{
    $request->validated();
    $classement2->update($request->input());
    return redirect()->route('classement2.show', ['classement2' => $classement2]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classement2 = Classement2::findOrFail($id);
        $classement2->delete();
        return redirect()->route('classement2.index');
    }
}
