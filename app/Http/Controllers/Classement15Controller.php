<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassement15Request;
use App\Models\Classement15;
use Illuminate\Http\Request;

class Classement15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
         $classement15List = Classement15::orderBy('id')->take(3)->get();        
         return view('classement15.list', ['classement15List' => $classement15List]);
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
         return view('classement15.show', ['classement15' => Classement15::findOrFail($id)]);
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(string $id)
     {
         return view('classement15.edit', ['classement15' => Classement15::findOrFail($id)]);
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(StoreClassement15Request $request, Classement15 $classement15)
     {
         $request->validated();
         $classement15->update($request->input());
         return redirect()->route('classement15.show', ['classement15' => $classement15]);
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function destroy(string $id)
     {
         $classement15 = Classement15::findOrFail($id);
         $classement15->delete();
         return redirect()->route('classement15.index');
     }
}