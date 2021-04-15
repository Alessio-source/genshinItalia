@extends('dashboard.layout')

@section('page_name')
    Aggiunta personaggio
@endsection

@section('page_class')
    characters_create
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

    <form action="{{ route('dashboard.characters.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <h1>Aggiunta personaggio</h1>

        <label for="name">Inserisci il nome: </label>
        <input type="text" id="name" name="name" placeholder="Nome" required>

        <label for="img_path">Inserisci una immagine: </label>
        <input type="file" name="img_path" id="image" accept="images/*" required>

        <div class="check">
            <label for="legendary">Leggendario: </label>
            <input type="checkbox" name="legendary" id="legendary" value="1">
        </div>

        <div class="buttons">
            <input type="submit" value="Aggiungi" class="btn">
            <a href="{{ route('dashboard.characters.index') }}" class="btn">Torna indietro</a>
        </div>
    </form>
@endsection