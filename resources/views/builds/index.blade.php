<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>GenshinItalia - Builds</title>

    </head>
    <body class="build_index">

        <header>
            <div class="container">
                <section class="right">
                    <img src="{{ asset('images/Paimon.png') }}" alt="">
                    <a href="{{ url('/') }}">Genshin Italia</a>
                </section>
    
                <nav>
                    <ul>
                        <li><a href="{{ url('/') }}">Homepage</a></li>
                        <li><a href="">News</a></li>
                        <li><a href="">Chi siamo?</a></li>
                        <li><a href="">Contatti</a></li>
                        @auth
                        <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <div class="cards">
                @foreach ($characters as $character)
                <div class="card">
                    <div class="container_img">
                        <img src="{{ asset('storage/' . $character->img_path) }}" alt="">
                    </div>
                    <p>{{ $character->name }}</p>
                </div>
                @endforeach
            </div>
        </main>
    </body>
</html>