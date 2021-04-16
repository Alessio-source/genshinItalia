<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Streammers;

class StreammerController extends Controller
{
    private $validateData = [
        'name' => 'required'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = User::where('id', Auth::id())->first();
        $streammers = Streammers::all();
        return view('dashboard.dashboard_streammers_index', compact('user', 'streammers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard.dashboard_streammers_create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validateData);
        $data = $request->all();

        $db = new Streammers;
        $db->fill($data);
        $db->save();

        return redirect()->route('dashboard.streammer.index')->with('Message', 'Streammer ' . $data['name'] . " aggiunto correttamente!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Streammers $streammer)
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard.dashboard_streammers_edit', compact('user', 'streammer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Streammers $streammer)
    {
        $request->validate($this->validateData);
        $data = $request->all();

        $streammer->fill($data);
        $streammer->update();

        return redirect()->route('dashboard.streammer.index')->with('Message', 'Streammer ' . $data['name'] . " modificato correttamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streammers $streammer)
    {
        $streammer->delete();
        return redirect()->route('dashboard.streammer.index')->with('Message', 'Streammer eliminato correttamente!');
    }
}
