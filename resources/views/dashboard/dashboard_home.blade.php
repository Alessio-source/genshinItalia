<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>Genshin Italia - Dashboard</title>
    </head>
    <body class="dashboard home">

        <main>
            <div class="aside">
                <ul class="menu">
                    <li class="item"><h2>Benvenuto {{ $user->name }}</h2></li>
                    <li class="item"><a href="">News</a></li>
                    <li class="item"><a href="">Personaggi</a></li>
                    <li class="item"><a href="">Links</a></li>
                    <li class="item"><a href="">Albedotu</a></li>
                </ul>
            </div>
            <div class="content">
                <h3>Nome: {{ $user->name }}</h3>
                <h3>Email: {{ $user->email }}</h3>
            </div>
        </main>

    </body>
</html>