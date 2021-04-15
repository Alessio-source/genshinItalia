<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon">

        <title>Genshin Italia - {{ $character->name }}</title>
    </head>
    <body>

        <main>
            <section class="character-info">
                <h2>{{ $character->name }}</h2>
                <img src="{{ asset('storage/' . $character->img_path ) }}" alt="{{ $character->name }}">
                <p>{{ $character->legendary == true ? "Leggendario" : "Epico" }}</p>
            </section>
        </main>
    </body>
</html>