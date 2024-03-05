<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/appointment', [App\Http\Controllers\SmsController::class, 'appointment'])->name('appointment');
