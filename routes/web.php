<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentationController;

Route::get('/', function () {
    return view('presentation');
});

Route::get('/presentation', [PresentationController::class, 'index'])->name('presentation');
