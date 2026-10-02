<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ReportController;
Route::prefix('reportes')->name('reportes.')->group(function () {
    Route::get('/zonas', [ReportController::class, 'clientesPorZona'])->name('zonas');
    Route::get('/interacciones', [ReportController::class,
'interaccionesPorAsesor'])->name('interacciones');
});