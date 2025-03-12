<?php

use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\FreelancerAuthController;
use App\Http\Controllers\FreelancerDashboardController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\FreelancerExploreController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
})->name('index');

Route::get('/signin', function () {
    return view('signin');
});

Route::match(['get', 'post'], '/services', [JobCategoryController::class, 'index'])->name('services');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('freelancer')->group(function () {
    Route::get('/register', [FreelancerAuthController::class, 'showRegisterForm'])->name('freelancer.register');
    Route::post('/register', [FreelancerAuthController::class, 'register']);
    Route::get('/login', [FreelancerAuthController::class, 'showLoginForm'])->name('freelancer.login');
    Route::post('/login', [FreelancerAuthController::class, 'login']);
    Route::post('/logout', [FreelancerAuthController::class, 'logout'])->name('freelancer.logout')->middleware('auth:freelancer');
    Route::get('/dashboard', [FreelancerDashboardController::class, 'index'])->name('freelancer.dashboard');
    Route::match(['get', 'post'], '/explore', [FreelancerExploreController::class, 'index'])->name('freelancer.explore');
    Route::get('/my-jobs', [FreelancerExploreController::class, 'myJobs'])->name('freelancer.myjobs');
});

Route::prefix('client')->group(function () {
    Route::get('/register', [ClientAuthController::class, 'showRegisterForm'])->name('client.register');
    Route::post('/register', [ClientAuthController::class, 'register']);
    Route::get('/login', [ClientAuthController::class, 'showLoginForm'])->name('client.login');
    Route::post('/login', [ClientAuthController::class, 'login']);
    Route::post('/logout', [ClientAuthController::class, 'logout'])->name('client.logout')->middleware('auth:client');
    Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/my-jobs', [ClientController::class, 'myJobs'])->name('client.myjobs');
    Route::get('/post-job', [ClientController::class, 'postJobs'])->name('client.postjob');
    Route::post('/post-job', [ClientController::class, 'addJob'])->name('client.addJob');
});

require __DIR__.'/auth.php';
