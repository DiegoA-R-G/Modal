<?php

use Illuminate\Support\Facades\Route;


Route::any('/Cliente', [App\Http\Controllers\ClienteController::class, 'index', 'store'])->name('Cliente.store');

