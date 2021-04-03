@extends('dashboard.layout')

@section('page_name')
    Modifica News
@endsection

@section('page_class')
    news_edit
@endsection

@section('aside_links')
    <li class="item"><h2>Benvenuto {{ $user->name }}</h2></li>
    <li class="item"><a href="{{ url('/') }}">Homepage</a></li>
    <li class="item"><a href="{{ route('dashboard.index') }}">User</a></li>
    <li class="item"><a href="{{ route('dashboard.news.index') }}">News</a></li>
    <li class="item"><a href="{{ route('dashboard.characters.index') }}">Personaggi</a></li>
    <li class="item"><a href="">Links</a></li>
@endsection

@section('main')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dashboard.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h1>Modifica News</h1>

        <label for="title">Inserisci un titolo: </label>
        <input type="text" placeholder="Titolo" name="title" id="title" value="{{ $news->title }}">

        <label for="text">Inserisci il testo della news: </label>
        <textarea name="text" id="text" rows="10" placeholder="Inserisci il testo della news">{{ $news->text }}</textarea>

        <label for="img_path">Inserisci una immagine: </label>
        <input type="file" name="img_path" id="image" accept="imagesNews/*">

        <img src="{{ asset('storage/' . $news->img_path) }}" alt="{{ $news->title }}">

        <div class="buttons">
            <input type="submit" value="Modifica" class="btn">
            <a href="{{ route('dashboard.news.index') }}" class="btn">Torna indietro</a>
        </div>
    </form>
@endsection