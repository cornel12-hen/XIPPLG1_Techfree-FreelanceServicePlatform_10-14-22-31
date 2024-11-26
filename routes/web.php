<?php

use App\Http\Controllers\JobCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Route::match(['get', 'post'], '/services', [JobCategoryController::class, 'index'])->name('services');
