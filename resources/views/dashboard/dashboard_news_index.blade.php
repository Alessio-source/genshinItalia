@extends('dashboard.layout')

@section('page_name')
    News
@endsection

@section('page_class')
    news_index
@endsection

@section('aside_links')
    <li class="item"><h2>Benvenuto {{ $user->name }}</h2></li>
    <li class="item"><a href="{{ url('/') }}">Homepage</a></li>
    <li class="item"><a href="{{ route('dashboard.index') }}">User</a></li>
    <li class="item"><a href="">Personaggi</a></li>
    <li class="item"><a href="">Links</a></li>
@endsection

@section('main')

    @if (session('Message'))
    <div class="alert alert-success">
        {{ session('Message') }}
    </div>
    @endif

    <a href="{{ route('dashboard.news.create') }}">Crea una nuova news</a>

    <div class="cards">
        @foreach ($user->news as $news)
        <div class="card">
            <h3>{{ $news->title }}</h3>
            <img src="{{ asset('storage/' . $news->img_path) }}" alt="">
            <p>{{ $news->text }}</p>
        </div>
        @endforeach
    </div>
    
@endsection
