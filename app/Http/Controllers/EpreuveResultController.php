<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEpreuveRequest;
use App\Models\EpreuveResult;
use Illuminate\Http\Request;

class EpreuveResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $EpreuveList = EpreuveResult::orderBy('id')->take(15)->get();        
        return view('epreuve.list', ['epreuveList' => $EpreuveList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('epreuve.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $request->validated();
        $epreuve = EpreuveResult::create($request->input());
        $epreuve->save();

        return redirect()->route('epreuve.show', ['epreuve' => $epreuve]);
    
 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('epreuve.show', ['epreuve' => EpreuveResult::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('epreuve.edit', ['epreuve' => EpreuveResult::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEpreuveRequest $request, EpreuveResult $epreuve)
{
    $request->validated();
    $epreuve->update($request->input());
    return redirect()->route('epreuve.show', ['epreuve' => $epreuve]);
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $epreuve = EpreuveResult::findOrFail($id);
$epreuve->delete();
return redirect()->route('epreuves.index');
}
}