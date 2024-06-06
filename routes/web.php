<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/imoveis', [ImovelController::class, 'index'])->name('imoveis.index');
// Route::get('/imovel/{id}', [ImovelController::class, 'show'])->name('imoveis.show');
// Route::get('/imoveis/anunciar', [ImovelController::class, 'create'])->name('imoveis.create');

Route::resource('imoveis', ImovelController::class);

Route::get('/servicos', function () {
    return view('welcome');
})->name('servicos');

Route::get('/contato', function () {
    return view('welcome');
})->name('contato');

Route::get('/comprar', function () {
    return view('welcome');
})->name('comprar');

Route::get('/alugar', function () {
    return view('welcome');
})->name('alugar');

Route::get('/anunciar', function () {
    return view('welcome');
})->name('anunciar');   