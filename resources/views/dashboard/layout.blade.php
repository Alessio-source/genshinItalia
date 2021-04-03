<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @yield('styles')

        <title>Genshin Italia - @yield('page_name') </title>
    </head>
    <body class="dashboard @yield('page_class') ">

        <main>

            <div class="aside">
                <ul class="menu">
                    @yield('aside_links')
                </ul>
            </div>

            <div class="content">
                @yield('main')
            </div>
        </main>

        @yield('scripts')
    </body>
</html>