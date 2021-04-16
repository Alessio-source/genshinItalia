@extends('dashboard.layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

@section('page_name')
    Streammers
@endsection

@section('page_class')
    streammers_index
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

    @if (session('Message'))
    <div class="alert alert-success">
        {{ session('Message') }}
    </div>
    @endif

    <a href="{{ route('dashboard.streammer.create') }}">Aggiungi un nuovo streammer</a>

    <div class="cards">
        @foreach ($streammers as $streammer)
        <div class="card">
            <h3>{{ $streammer->name }}</h3>
            <div>
                <a href="{{ route('dashboard.streammer.edit', $streammer->id) }}"><i class="fas fa-pen-square"></i></a>
                <form action="{{ route('dashboard.streammer.destroy', $streammer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" ><i class="fas fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

@endsection