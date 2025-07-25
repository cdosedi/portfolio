<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');