@extends('layouts.layout')

@section('page_name')
    HomePage
@endsection

@section('page_class')
    homepage
@endsection

@section('header_link')
    <li><a href="">News</a></li>
    <li><a href="{{ route('build.index') }}">Build</a></li>
    <li><a href="">Chi siamo?</a></li>
    <li><a href="">Contatti</a></li>
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
                <div class="streammer">
                    <iframe
                        src="https://player.twitch.tv/?channel=zergantis_official&parent=127.0.0.1&muted=true"
                        allowfullscreen="true">
                    </iframe>
                </div>

                <div class="streammer">
                    <iframe
                        src="https://player.twitch.tv/?channel=ytgiul&parent=127.0.0.1&muted=true"
                        allowfullscreen="true">
                    </iframe>
                </div>

                <div class="streammer">
                    <iframe
                        src="https://player.twitch.tv/?channel=lothersensei&parent=127.0.0.1&muted=true"
                        allowfullscreen="true">
                    </iframe>
                </div>

                <div class="streammer">
                    <iframe
                        src="https://player.twitch.tv/?channel=kalandorf&parent=127.0.0.1&muted=true"
                        allowfullscreen="true">
                    </iframe>
                </div>

                <div class="streammer">
                    <iframe
                        src="https://player.twitch.tv/?channel=kurolily&parent=127.0.0.1&muted=true"
                        allowfullscreen="true">
                    </iframe>
                </div>
            </div>

        </section>
    </div>
@endsection