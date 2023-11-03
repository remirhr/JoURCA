<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement14Request;
use App\Models\Classement14;
use Illuminate\Http\Request;

class Classement14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
     public function index()
     {
         $classement14List = Classement14::orderBy('id')->take(3)->get();        
         return view('classement14.list', ['classement14List' => $classement14List]);
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
         return view('classement14.show', ['classement14' => Classement14::findOrFail($id)]);
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(string $id)
     {
         return view('classement14.edit', ['classement14' => Classement14::findOrFail($id)]);
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(StoreClassement14Request $request, Classement14 $classement14)
     {
         $request->validated();
         $classement14->update($request->input());
         return redirect()->route('classement14.show', ['classement14' => $classement14]);
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         $classement14 = Classement14::findOrFail($id);
         $classement14->delete();
         return redirect()->route('classement14.index');
     }
}
