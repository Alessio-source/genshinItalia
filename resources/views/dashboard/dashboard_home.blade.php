@extends('dashboard.layout')

@section('page_name')
    Home
@endsection

@section('page_class')
    home
@endsection


@section('aside_links')
    <li class="item"><h2>Benvenuto {{ $user->name }}</h2></li>
    <li class="item"><a href="{{ url('/') }}">Homepage</a></li>
    <li class="item"><a href="{{ route('dashboard.news.index') }}">News</a></li>
    <li class="item"><a href="">Personaggi</a></li>
    <li class="item"><a href="">Links</a></li>
@endsection

@section('main')
    <h2>Pannello Amministratore</h2>
    <h3>Nome: {{ $user->name }}</h3>
    <h3>Email: {{ $user->email }}</h3>
    <h3>Data attuale: @php echo date("d") @endphp/@php echo date('m') @endphp/@php echo date('Y') @endphp</h3>
@endsection