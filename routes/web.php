<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImovelController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/imoveis', [ImovelController::class, 'index'])->name('imoveis.index');
// Route::get('/imovel/{id}', [ImovelController::class, 'show'])->name('imoveis.show');
// Route::get('/imoveis/anunciar', [ImovelController::class, 'create'])->name('imoveis.create');

Route::resource('imoveis', ImovelController::class);