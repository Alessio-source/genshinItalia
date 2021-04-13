<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Characters;

class CharactersController extends Controller
{
    private $validateData = [
        'name' => 'required|max:255',
        'img_path' => 'required|mimes:jpeg,png,jpg,gif,svg|image'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Characters::all();
        $user = User::where('id', Auth::id())->first();
        return view('dashboard/dashboard_characters_index', compact('user', 'characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard/dashboard_characters_create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( $this->validateData );

        $data = $request->all();

        $data['user_id'] = Auth::id();
        $data['img_path'] = Storage::disk('public')->put('images', $data['img_path']);

        $characher = new Characters;
        $characher->fill($data);
        $characher->save();
        return redirect()->route('dashboard.characters.index')->with('Message', "Personaggio " . $data['name'] . " aggiunto con successo");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Characters $character)
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard/dashboard_characters_edit', compact('character', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characters $character)
    {
        $data = $request->all();

        if(empty($data["img_path"])) {
            $data["img_path"] = $character->img_path;
            
            $request->validate([
                'name' => 'required|max:255'
            ]);
        } else {
            $data['img_path'] = Storage::disk('public')->put('images', $data['img_path']);
            $request->validate( $this->validateData );
        }

        $character->fill($data);
        $character->update();

        return redirect()->route('dashboard.characters.index')->with('Message', 'Personaggio ' . $data['name'] . " modificato correttamente!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
