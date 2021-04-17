@extends('layouts.layout')

@section('page_name')
    News
@endsection

@section('page_class')
    news_index
@endsection

@section('header_link')
    <li><a href="{{ url('/') }}">HomePage</a></li>
    <li><a href="{{ route('build.index') }}">Build</a></li>
    <li><a href="https://discord.gg/QVaEjC2BJ8">Discord</a></li>
    @auth
    <li><a href="{{ route('dashboard.index') }}">Pannello di controllo</a></li>
    @endauth
@endsection

@section('main')
    <h2 class="container">News</h2>
    <div class="cards container">
        @foreach ($news as $item)
            <div class="card">
                <h3>{{ $item->title }}</h3>
                <img src="{{ asset('storage/' . $item->img_path) }}" alt="">
                <p>{{ $item->text }}</p>
                <h4>Autore</h4>
                <p>{{ $item->user->name }}</p>
            </div>
        @endforeach
    </div>
@endsection