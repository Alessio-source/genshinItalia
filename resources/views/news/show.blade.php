@extends('layouts.layout')

@section('page_name')
    {{ $news->title }}
@endsection

@section('page_class')
    news_show
@endsection

@section('header_link')
    <li><a href="{{ url('/') }}">HomePage</a></li>
    <li><a href="{{ route('news.index') }}">News</a></li>
    <li><a href="{{ route('build.index') }}">Build</a></li>
    <li><a href="https://discord.gg/QVaEjC2BJ8">Discord</a></li>
    @auth
    <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
    @endauth
@endsection

@section('main')
    <div class="container">
        <img src="{{ asset('storage/' . $news->img_path) }}" alt="{{ $news->title }}">
        <h1>{{ $news->title }}</h1>

        <p>{!! $news->text !!}</p>
        <p>Data: {{ $news->created_at }}</p>

        <h4>Autore</h4>
        <p>{{ $news->user->name }}</p>
    </div>
@endsection