<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreParticipantRequest;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participantList = Participant::orderBy('idParticipant')->take(10000000)->get();        
         return view('participant.list', ['participantList' => $participantList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('participant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParticipantRequest $request)
    {
        $request->validated();
        $participant = Participant::create($request->input());
        $participant->save();

        return redirect()->route('participant.show', ['participant' => $participant]);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('participant.show', ['participant' => Participant::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('participant.edit', ['participant' => Participant::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreParticipantRequest $request, Participant $participant)
{
    $request->validated();
    $participant->update($request->input());
    return redirect()->route('participant.show', ['participant' => $participant]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $participant = Participant::findOrFail($id);
$participant->delete();
return redirect()->route('participant.index');
    }
}
