<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about_us', [HomeController::class, 'about_page'])->name('about');
Route::get('/contact_us', [HomeController::class, 'contact_page'])->name('contact');
Route::get('/portfolio', [HomeController::class, 'portfolio_page'])->name('portfolio');
Route::get('/FAQ', [HomeController::class, 'faq_page'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog_page'])->name('blog');
Route::get('/affiliates', [HomeController::class, 'affiliates_page'])->name('affiliates');
Route::get('/projects', [HomeController::class, 'projects_page'])->name('projects');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
