<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class,'principal'])->name('principal');
Route::get('/sobre-nos', [SobreNosController::class,'sobreNos'])->name('sobreNos');
Route::get('/contato', [ContatoController::class,'contato'])->name('contato');
