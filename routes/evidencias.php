<?php
use App\Http\Controllers\EvidenciaController;

Route::controller(EvidenciaController::class)->prefix('evidencias')->name('evidencias.')
    ->group(
        function(){
            Route::get('/', 'index')->name('index');
        });