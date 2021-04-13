@extends('dashboard.layout')

@section('page_name')
    Modifica personaggio
@endsection

@section('page_class')
    characters_edit
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

    <form action="{{ route('dashboard.characters.update', $character->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h1>Modifica personaggio</h1>

        <label for="name">Inserisci il nome: </label>
        <input type="text" id="name" name="name" placeholder="Nome" value="{{ $character->name }}" required>

        <label for="img_path">Inserisci una immagine: </label>
        <input type="file" name="img_path" id="image" accept="images/*" required>
        <img src="{{ asset('storage/' . $character->img_path) }}" alt="{{ $character->name }}">

        <div class="buttons">
            <input type="submit" value="Modifica" class="btn">
            <a href="{{ route('dashboard.characters.index') }}" class="btn">Torna indietro</a>
        </div>
    </form>
@endsection