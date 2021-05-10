@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    <main>
        <div class="products_body">
            <h1>Products section</h1>
            @foreach ($formati as $tipo => $formato)
            <h1 class="type">La {{$tipo}}</h1>
            <div class="paste_container">
                @foreach ($formato as $key => $pasta)
                    <div class="pasta_card">
                        <img src="{{$pasta['src']}}" alt="{{$pasta['titolo']}}">
                        <div class="overlay">
                            <a href="{{ route('pagina-dettaglio', ['id' => $key]) }}">{{$pasta['titolo']}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </main>
@endsection

{{-- MIA VERSIONE: --}}

{{-- @foreach ($categorie_pasta as $categoria_pasta)
<h1 class="type">La {{$categoria_pasta}}</h1>
<div class="pasta_container">
@foreach ($pastas as $pasta)
@if ($pasta['tipo'] == $categoria_pasta)
<div class="specific_pastabox">
    <div class="my_layover">
        <h2>{{$pasta['titolo']}}</h2>
    </div>
    <img src="{{$pasta['src']}}">
</div>
@endif
@endforeach
</div>
@endforeach --}}