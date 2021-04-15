@extends('layouts.layout')

@section('page_name')
    {{ $character->name }}
@endsection

@section('page_class')
    build_show
@endsection

@section('header_link')
    <li><a href="{{ url('/') }}">Homepage</a></li>
    <li><a href="">News</a></li>
    <li><a href="{{ route('build.index') }}">Build</a></li>
    <li><a href="">Chi siamo?</a></li>
    <li><a href="">Contatti</a></li>
    @auth
    <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
    @endauth
@endsection

@section('main')
    <section class="info_pg container">
        <h3>{{$character->name}}</h3>
        <img src="{{ asset('storage/' . $character->img_path) }}" alt="{{$character->name}}">
        <p>Categoria: {{ $character->legendary == true ? "leggendario" : "epico" }}</p>
    </section>
@endsection