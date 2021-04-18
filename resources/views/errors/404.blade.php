<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon">

        <title>Genshin Italia - Errore 404</title>
    </head>
    <body class="error_404">
        <main style="background-image: url('{{ asset('images/404.gif') }}');">
            <div class="layover">
                <p>Errore - 404</p>
                <a href="{{ url("/") }}">Torna alla homepage</a>
            </div>
        </main>
    </body>
</html>