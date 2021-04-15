<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @yield('styles')

        <link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon">

        <title>GenshinItalia - @yield('page_name')</title>
    </head>
    <body class="layout @yield('page_class')">
        <header>
            <div class="container">
                <section class="right">
                    <img src="{{ asset('images/Paimon.png') }}" alt="">
                    <a href="{{ url('/') }}">Genshin Italia</a>
                </section>
    
                <nav>
                    <ul>
                        <li><a href="">News</a></li>
                        <li><a href="{{ route('build.index') }}">Build</a></li>
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

            <section class="video">
                <h1>Genshin Italia</h1>
                <div class="layover"></div>
                <video autoplay muted loop>
                    <source src="{{ asset('images/wallpaper.mp4') }}" type="video/mp4">
                    Il tuo browser non supporta questo tag.
                </video>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#EDF2F4" fill-opacity="1" d="M0,96L288,256L576,192L864,288L1152,160L1440,32L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
                </svg>
            </section>

            @yield('main')
        </main>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#2B2D42" fill-opacity="1" d="M0,96L288,256L576,192L864,288L1152,160L1440,32L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
        </svg>
        <footer>
            <div class="footer_top">
                <div class="left">
                    <h5>Team</h5>
                    <a href="">Founder - Shine</a>
                </div>
                <div class="right">
                    <h5>Link Utili</h5>
                    <a href="">News</a>
                    <a href="{{ route('build.index') }}">Build</a>
                    <a href="">Chi siamo?</a>
                    <a href="">Contatti</a>
                </div>
            </div>

            <div class="footer_bottom">
                <p>&copy; Genshin Italia - @php echo date("Y") @endphp</p>
            </div>
        </footer>

        @yield('scripts')
    </body>
</html>