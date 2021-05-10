<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('pagina-home');

Route::get('/news', function () {
    return view('news');
})->name('pagina-news');

Route::get('/prodotti', function () {

    //METODO CONFIG CON COLLECTION(raccomandato): 
    $pasta = config('pasta');

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    /*  METODO FILTER:
    $pasta_lunga = array_filter($pasta), function($elemento)
    return $elemento['tipo'] == 'lunga'; */


    /* MIO PRIMO METODO:
    
    $data['categorie_pasta'] = [];
    foreach ($data['pastas'] as $pasta) {
        if (!in_array($pasta['tipo'],$data['categorie_pasta'])) {
            $data['categorie_pasta'][] = $pasta['tipo'];
        }
    }; */

    return view('products', $data);
})->name('pagina-prodotti');



Route::get('/dettaglio/{id}', function ($id) {
    $pasta = config('pasta');
    $data = [
        'formato' => $pasta[$id],
        'id' => $id
    ];

    return view('dettagli', $data);
})->name('pagina-dettaglio');
