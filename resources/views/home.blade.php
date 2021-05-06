@extends('layouts.app')

@section('titoloPagina','Home')

@section('content')
    <main class="home_main">
        <h1>Home section</h1>
        <img id="home_img" src="{{asset('img/molisana-home.jpg')}}">
    </main>
@endsection