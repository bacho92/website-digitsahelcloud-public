<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/vpn',      [PageController::class, 'vpn'])->name('vpn');
Route::get('/about',    [PageController::class, 'about'])->name('about');
Route::get('/contact',  [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'send'])->name('contact.send');
