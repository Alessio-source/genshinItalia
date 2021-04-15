<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon">

        <title>GenshinItalia - Builds</title>

    </head>
    <body class="build_index">

        <div class="layover"></div>

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

        <main class="container">
            <div class="cards">
                @foreach ($characters as $character)
                <div class="card">
                    <a href="{{ route("build.show", $character->id ) }}">
                        <div class="container_img {{  $character->legendary == 1 ? "legendary" : "epic" }}">
                            <img src="{{ asset('storage/' . $character->img_path) }}" alt="">
                        </div>
                        <p>{{ $character->name }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </main>
    </body>
</html>