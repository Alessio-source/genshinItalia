@extends('layouts.layout')

@section('page_name')
    Creazione info
@endsection

@section('page_class')
   info_create 
@endsection

@section('librery')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection

@section('main')
    <form action="{{ route('dashboard.info.store', $character->id) }}" class="container" method="POST">
        @csrf
        @method('POST')
        <h2>Info: {{ $character->name }}</h2>

        <label for="weapon">Scegli almeno un'arma da consigliare: </label>
        <select name="weapon[]" id="weapon" class="js-multiple" multiple required>
            @foreach ($weapons as $weapon) 
            <option value="{{ $weapon->id }}">{{ $weapon->name }}</option>
            @endforeach
        </select>

        <label for="artefacts">Scegli almeno un'artefatto da consigliare: </label>
        <select name="artefacts[]" id="artefacts" class="js-multiple" multiple>
            @foreach ($artefacts as $artefact) 
            <option value="{{ $artefact->id }}">{{ $artefact->name }} (x{{ $artefact->quantity }})</option>
            @endforeach
        </select>

        <div class="buttons">
            <input type="submit" value="Aggiungi info" class="btn">
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.js-multiple').select2();
        });
    </script>
@endsection