<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;

class NewsPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
        return view('news.index', compact('news'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        return view('news.show', compact('news'));
    }
}
