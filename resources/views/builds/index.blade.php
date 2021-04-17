@extends('layouts.layout')

@section('page_name')
    Builds
@endsection

@section('page_class')
    build_index
@endsection


@section('header_link')
    <li><a href="{{ url('/') }}">Homepage</a></li>
    <li><a href="{{ route('news.index') }}">News</a></li>
    <li><a href="https://discord.gg/QVaEjC2BJ8">Discord</a></li>
    @auth
    <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
    @endauth
@endsection

@section('main')
    <h2 class="container">Lista personaggi</h2>
    <div class="cards container">
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
@endsection