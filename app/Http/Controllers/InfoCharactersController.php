<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Characters;
use App\Weapons;
use App\Artefacts;

class InfoCharactersController extends Controller
{
    private $validateData = [
        'weapon' => "required",
        'artefact' => "required"
    ];
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $character = Characters::where('id', $id)->first();
        $weapons = Weapons::where('type', $character->weapon)->get();
        $artefacts = Artefacts::all();
        return view('dashboard.dashboard_info_create', compact('character', 'weapons', 'artefacts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $character = Characters::where('id', $id)->first();
        $character->Weapons()->attach($data["weapon"]);
        $character->Artefacts()->attach($data["artefacts"]);

        return redirect()->route('dashboard.characters.index')->with('Message', 'Personaggio ' . $character->name . " creato correttamente!");
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
