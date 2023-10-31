<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResultatRequest;
use App\Models\Equipe;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resultatList = Equipe::orderBy('id')->take(3)->get();        
return view('resultat.list', ['resultatList' => $resultatList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resultat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResultatRequest $request)
    {
        $equipe = Equipe::create($request->input());

$equipe->save();
 
return redirect()->route('resultat.list', ['resultat' => $equipe]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('resultat.show', ['resultat' => Equipe::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('resultat.edit', ['resultat' => Equipe::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreResultatRequest $request, Equipe $resultat)
    {
        $request->validated();
        $resultat->update($request->input());
        return redirect()->route('resultat.show', ['resultat' => $resultat]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resultat = Equipe::findOrFail($id);
$resultat->delete();
return redirect()->route('resultat.index');
    }
}
