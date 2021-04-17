@extends('layouts.layout')

@section('page_name')
    {{ $character->name }}
@endsection

@section('page_class')
    build_show
@endsection

@section('header_link')
    <li><a href="{{ url('/') }}">Homepage</a></li>
    <li><a href="{{ route('news.index') }}">News</a></li>
    <li><a href="{{ route('build.index') }}">Build</a></li>
    <li><a href="https://discord.gg/QVaEjC2BJ8">Discord</a></li>
    @auth
    <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
    @endauth
@endsection

@section('main')
    <section class="info_pg container">
        <img src="{{ asset('storage/' . $character->img_path) }}" alt="{{$character->name}}">
        <div class="info_text">
            <h3>{{$character->name}}</h3>
            <p>Categoria: {{ $character->legendary == true ? "leggendario" : "epico" }}</p>
            <p>Tipo: {{$character->type}}</p>
            <p>Arma: {{$character->weapon}}</p>
        </div>
    </section>

    <section class="info container">
        <h2>Info</h2>
        <p>{{$character->info}}</p>
    </section>

    <section class="weapon container">
        <h2>Armi consigliate</h2>
        @foreach ($character->weapons as $weapon)
            <p>{{ $weapon->name }}</p>
        @endforeach
    </section>

    <section class="artefacts container">
        <h2>Artefatti consigliati</h2>
        @foreach ($character->artefacts as $artefact)
            <p>{{ $artefact->name }} x{{ $artefact->quantity }}</p>
        @endforeach
    </section>

    <h6 class="container">* quelli che diamo noi sono solo consigli sulla base della nostra esperienza in gioco, siete liberi di equipaggiare quello che credete essere meglio per voi.</h6>
@endsection