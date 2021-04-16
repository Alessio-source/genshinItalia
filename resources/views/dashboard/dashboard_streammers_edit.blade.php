@extends('dashboard.layout')

@section('page_name')
    Modifica streammer
@endsection

@section('page_class')
    streammers_create
@endsection

@section('aside_links')
    <li class="item"><h2>Benvenuto {{ $user->name }}</h2></li>
    <li class="item"><a href="{{ url('/') }}">Homepage</a></li>
    <li class="item"><a href="{{ route('dashboard.index') }}">User</a></li>
    <li class="item"><a href="{{ route('dashboard.news.index') }}">News</a></li>
    <li class="item"><a href="{{ route('dashboard.characters.index') }}">Personaggi</a></li>
    <li class="item"><a href="{{ route('dashboard.streammer.index') }}">Streammers</a></li>
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

    <form action="{{ route('dashboard.streammer.update', $streammer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Modifica streammer</h2>
        <label for="name">Inserisci il nome dello streammer: </label>
        <input type="text" name="name" id="name" required value="{{ $streammer->name }}">

        <div class="buttons">
            <input type="submit" class="btn" value="Modifica streammer">
        </div>
    </form>
@endsection