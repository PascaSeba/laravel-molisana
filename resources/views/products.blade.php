@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    <main>
        <div class="products_body">
            <h1>Products</h1>
            @foreach ($tipi_pasta as $tipo_pasta)
            <h1>La {{$tipo_pasta}}</h1>
            <div class="pasta_container">
                @foreach ($pastas as $pasta)
                    @if ($pasta['tipo'] == $tipo_pasta)
                    <div class="specific_pastabox">
                        <div class="my_layover">
                            <p>{{$pasta['titolo']}}</p>
                        </div>
                        <img src="{{$pasta['src']}}">
                    </div>
                    @endif
                @endforeach
            </div>
            @endforeach
        </div>
    </main>
@endsection