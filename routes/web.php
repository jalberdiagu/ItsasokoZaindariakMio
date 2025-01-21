<?php

use App\Http\Controllers\bidaiakController;
use App\Http\Controllers\ErreskatatuakController;
use App\Http\Controllers\ErreskateakController;
use App\Http\Controllers\TripulanteakController;
use Illuminate\Support\Facades\Route;

//BIDAIARIAK
//Bidaiari guztiak erakusteko ruta
Route::get('/', [bidaiakController::class, 'index'])->name('bidaiak.index');

//Bidaiari berria sortzeko galdetegia bistaratu
Route::get('/bidaiak/create', [bidaiakController::class, 'create'])->name('bidaiak.create');

//Bidaiaria sortzeko
Route::post('/bidaiak/store', [bidaiakController::class, 'store'])->name('bidaiak.store');

//Bidaiaria ikusteko
Route::get('/bidaiak/show/{id}', [bidaiakController::class, 'show'])->name('bidaiak.show');

//Bidaiaria editatzeko galdetegia bistaratzeko ruta
Route::get('/bidaiak/edit{id}', [bidaiakController::class, 'edit'])->name('bidaiak.edit');

//Bidaiaria editatzeko
Route::put('/bidaiak/{id}', [bidaiakController::class, 'update'])->name('bidaiak.update');

//Bidaiak ezabatzeko ruta
Route::delete('/bidaiak/{id}', [bidaiakController::class, 'destroy'])->name('bidaiak.destroy');


//TRIPULANTEAK
//Tripulante guztien informazioa erakusteko ruta
Route::get('/tripulanteak', [TripulanteakController::class, 'index'])->name('tripulanteak.index');

//Tipulante berria sortzeko galdetegia bistaratzeko
Route::get('/tripulanteak/create', [TripulanteakController::class, 'create'])->name('tripulanteak.create');

//Tripulante berria sortzeko
Route::post('/tripulanteak/store', [TripulanteakController::class, 'store'])->name('tripulanteak.store');

//Tripulantearen informazioa ikusteko
Route::get('/tripulanteak/show/{tripulantea}', [TripulanteakController::class, 'show'])->name('tripulanteak.show');

//Tripulantearen informazioa aldatzeko galdetegia bistaratzeko ruta
Route::get('/tripulanteak/edit/{tripulanteak}', [TripulanteakController::class, 'edit'])->name('tripulanteak.edit');

//Tripulantearen informazioa aldatzeko
Route::put('/tripulanteak/update/{tripulanteak}', [TripulanteakController::class, 'update'])->name('tripulanteak.update');

//Tripulanteak ezabatzeko
Route::delete('/tripulanteak/destroy/{tripulanteak}', [TripulanteakController::class, 'destroy'])->name('tripulanteak.destroy');


//ERRESKATEAK
Route::resource('erreskateak', ErreskateakController::class);

//ERRESKATATUAK
Route::resource('erreskatatuak', ErreskatatuakController::class);
