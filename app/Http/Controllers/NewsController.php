<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\news;

class NewsController extends Controller
{
    private $dataValidate = [
        'title' => 'required|max:255',
        'text' => 'required',
        'img_path' => 'required|mimes:jpeg,png,jpg,gif,svg|image'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard/dashboard_news_index', compact('user') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard/dashboard_news_create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            $this->dataValidate
        );

        $data = $request->all();

        $data['user_id'] = Auth::id();

        $data['img_path'] = Storage::disk('public')->put('images', $data['img_path']);

        $news = new News();
        $news->fill($data);
        $news->save();

        return redirect()->route('dashboard.news.index')->with('Message', 'Articolo ' . $data['title'] . " Creato correttamente!");

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
    public function edit(News $news)
    {
        $user = User::where('id', Auth::id())->first();
        return view('dashboard/dashboard_news_edit', compact('news', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $data = $request->all();

        if(empty($data['img_path'])){
            $data['img_path'] = $news->img_path;

            $request->validate([
                'title' => 'required|max:255',
                'text' => 'required'
            ]);
        } else {
            $data['img_path'] = Storage::disk('public')->put('images', $data['img_path']);

            $request->validate(
                $this->dataValidate
            );
        }

        

        $news->fill($data);
        $news->update();

        return redirect()->route('dashboard.news.index')->with('Message', 'Articolo ' . $data['title'] . " modificato correttamente!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('dashboard.news.index')->with('Message', 'Articolo cancellato correttamente!');
    }
}
