@extends('dashboard.layout')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
@endsection

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
    <li class="item"><a href="{{ route('dashboard.news.index') }}">News</a></li>
    <li class="item"><a href="{{ route('dashboard.characters.index') }}">Personaggi</a></li>
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

            @if (strlen($news->text) > 500)
                <p>{{ substr($news->text, 0, 500) . "..." }}</p>
            @else
                <p>{{ $news->text }}</p>
            @endif

            <div>
                <a href="{{ route('dashboard.news.edit', $news->id) }}"><i class="fas fa-pen-square"></i></a>
                <form action="{{ route('dashboard.news.destroy', $news->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" ><i class="fas fa-trash-alt"></i></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection
