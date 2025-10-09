<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
