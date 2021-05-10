@extends('layouts.app')

@section('titoloPagina','Products')

@section('content')
    <main>
        <div class="products_body">
            <h1>Products section</h1>
            {{-- 
                    MIA VERSIONE:

            @foreach ($categorie_pasta as $categoria_pasta)
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
            @dd($paste);
        </div>
    </main>
@endsection

{{-- METODO DA CONFIG:
    
    @section('content')
        @foreach ($paste as $pasta)

        @endforeach
    @endsection


--}}