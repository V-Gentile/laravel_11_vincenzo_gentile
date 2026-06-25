<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DigimonController;


Route::get('/', [PublicController::class, 'home'])->name('home');

Route::get('/chi-siamo', [PublicController::class, 'chisiamo'])->name('chisiamo');

Route::get('/chi-siamo/dettagli/{name}',[PublicController::class, 'chisiamodettagli'])->name('chisiamodettagli');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

Route::get('/digimon/digidex', [DigimonController::class, 'digidex'])->name('digimon.list');

Route::get('/digimon/dettagli/{mon}', [DigimonController::class, 'digimondettagli'])->name('digimon.dettagli');

Route::get('/digimon/crea', [DigimonController::class, 'create'])->name('digimon.crea');

Route::post('/digimon/crea/submit', [DigimonController::class, 'store'])->name('digimon.submit');

Route::get('/digimon/digidettagli/{digimon}', [DigimonController::class, 'show'])->name('digimon.show');

Route::get('/digimon/edit/{digimon}', [DigimonController::class, 'edit'])->name('digimon.edit');

Route::put('/digimon/update/{digimon}', [DigimonController::class, 'update'])->name('digimon.update');

Route::delete('/digimon/delete/{digimon}', [DigimonController::class, 'destroy'])->name('digimon.delete');
