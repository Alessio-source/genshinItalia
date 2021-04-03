@extends('dashboard.layout')

@section('page_name')
    Creazione News
@endsection

@section('page_class')
    news_create
@endsection

@section('aside_links')
    <li class="item"><h2>Benvenuto {{ $user->name }}</h2></li>
    <li class="item"><a href="{{ url('/') }}">Homepage</a></li>
    <li class="item"><a href="{{ route('dashboard.index') }}">User</a></li>
    <li class="item"><a href="{{ route('dashboard.news.index') }}">News</a></li>
    <li class="item"><a href="">Personaggi</a></li>
    <li class="item"><a href="">Links</a></li>
@endsection

@section('main')
    <form action="{{ route('dashboard.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <h1>Creazione News</h1>

        <label for="title">Inserisci un titolo: </label>
        <input type="text" placeholder="Titolo" name="title" id="title">

        <label for="text">Inserisci il testo della news: </label>
        <textarea name="text" id="text" rows="10" placeholder="Testo news"></textarea>

        <label for="img_path">Inserisci una immagine: </label>
        <input type="file" name="img_path" id="image" accept="imagesNews/*">

        <div class="buttons">
            <input type="submit" value="Crea" class="btn">
            <a href="{{ route('dashboard.news.index') }}" class="btn">Torna indietro</a>
        </div>
    </form>
@endsection