<?php


use App\Http\Controllers\ChirpController;


Route::get('/', [ChirpController::class, 'index']);

Route::resource('chirps', ChirpController::class)
    ->only(['store', 'edit', 'update', 'destroy']);

