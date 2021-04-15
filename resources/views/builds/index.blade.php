@extends('layouts.layout')

@section('page_name')
    Builds
@endsection

@section('page_class')
    build_index
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