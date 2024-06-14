<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/imoveis', [ImovelController::class, 'index'])->name('imoveis.index');
Route::get('/imovel/{id}', [ImovelController::class, 'show'])->name('imoveis.show');
// Route::get('/imoveis/anunciar', [ImovelController::class, 'create'])->name('imoveis.create');

// Route::resource('imoveis', ImovelController::class);

Route::get('/quem-somos', function () {
    return view('quem-somos');
})->name('quem-somos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/comprar', [ImovelController::class, 'comprar'])->name('comprar');

Route::get('/alugar', [ImovelController::class, 'alugar'])->name('alugar');

Route::get('/anunciar', function () {
    return view('anunciar');
})->name('anunciar');

Route::get('/imoveis/buscar', [ImovelController::class, 'buscar'])->name('imoveis.buscar');
Route::post('/imoveis/anunciar', [ImovelController::class, 'create'])->name('imoveis.anunciar');

Route::post('/enviar-contato', [ImovelController::class, 'enviarcontato'])->name('enviar-contato');
