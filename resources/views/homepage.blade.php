<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon">

        <title>GenshinItalia - Homepage</title>
    </head>
    <body class="homepage">
        <header>
            <div class="container">
                <section class="right">
                    <img src="{{ asset('images/Paimon.png') }}" alt="">
                    <a href="{{ url('/') }}">Genshin Italia</a>
                </section>
    
                <nav>
                    <ul>
                        <li><a href="">News</a></li>
                        <li><a href="">Build</a></li>
                        <li><a href="">Chi siamo?</a></li>
                        <li><a href="">Contatti</a></li>
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

            <div class="container">
                <section class="news">
                    <h2>Ultime notizie</h2>
                    <div class="cards">
                        <div class="card">
                            <p>Prova</p>
                        </div>

                        <div class="card">
                            <p>Prova</p>
                        </div>

                        <div class="card">
                            <p>Prova</p>
                        </div>
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
                    <a href="">Build</a>
                    <a href="">Chi siamo?</a>
                    <a href="">Contatti</a>
                </div>
            </div>

            <div class="footer_bottom">
                <p>&copy; Genshin Italia - @php echo date("Y") @endphp</p>
            </div>
        </footer>
    </body>
</html>