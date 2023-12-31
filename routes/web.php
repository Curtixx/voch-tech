<?php

use App\Http\Livewire\Createcolaborador;
use App\Http\Livewire\CreateUnidade;
use App\Http\Livewire\Desempenhocolaborador;
use App\Http\Livewire\Ranking;
use App\Http\Livewire\RelatorioColaboradores;
use App\Http\Livewire\RelatorioTotalColaboradores;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/unidade', CreateUnidade::class)->name('unidade');
    Route::get('/colaborador', Createcolaborador::class)->name('colaborador');
    Route::get('/desempenho', Desempenhocolaborador::class)->name('desempenho');
    Route::get('/ranking', Ranking::class)->name('ranking');
    Route::get('/relatoriocolaboradores', RelatorioColaboradores::class)->name('relatorio-colaboradores');
    Route::get('/relatoriounidades', RelatorioTotalColaboradores::class)->name('relatorio-unidades');
});
