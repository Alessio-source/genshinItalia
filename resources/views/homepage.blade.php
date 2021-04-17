@extends('layouts.layout')

@section('page_name')
    HomePage
@endsection

@section('page_class')
    homepage
@endsection

@section('header_link')
    <li><a href="{{ route('news.index') }}">News</a></li>
    <li><a href="{{ route('build.index') }}">Build</a></li>
    <li><a href="https://discord.gg/QVaEjC2BJ8">Discord</a></li>
    @auth
    <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
    @endauth
@endsection

@section('main')

    <div class="container">
        <section class="news">
            <h2>Ultime notizie</h2>
            <div class="cards">
                @foreach ($news as $key => $item)
                    @if($key > $news->count() - 4)
                        <div class="card">
                            <a href="">
                                <h3>- {{ $item->title }} -</h3>

                                <div class="img_container">
                                    <img src="{{ asset('storage/' . $item->img_path) }}" alt="{{ $item->title }}">
                                </div>

                                <p>{{ $item->text }}</p>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

        <section class="streamers">
            <h2>Streamer consigliati</h2>

            <div class="list">
                @foreach ($streammers as $streammer)
                <div class="streammer">
                    <iframe
                        src="{{ "https://player.twitch.tv/?channel=" . $streammer->name . "&parent=127.0.0.1&muted=true" }}"
                        allowfullscreen="true">
                    </iframe>
                </div>
                @endforeach
            </div>

        </section>
    </div>
@endsection