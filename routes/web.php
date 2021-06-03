<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pages\IndexPage;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// GENERAL PAGES
Route::get('/', [ IndexPage::class, 'index' ])->name('index');

Route::get('login', [IndexPage::class, 'authenticateUser'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('register', [IndexPage::class, 'registerUser'])->name('register');
Route::post('register', [AuthController::class, 'registration']);

Route::get('exit', [AuthController::class, 'exit'])->name('exit');


Route::middleware(['auth'])->group(function (){
    Route::get('/profile', [ IndexPage::class, 'profile' ])->name('profile');
    Route::get('/about', [ IndexPage::class, 'about' ])->name('about');
    Route::get('/contact', [ IndexPage::class, 'contact' ])->name('contact');
    Route::get('/education', [ IndexPage::class, 'education' ])->name('education');
    Route::get('/experience', [ IndexPage::class, 'experience' ])->name('experience');
    Route::get('/insert', [ IndexPage::class, 'insert' ])->name('insert');
    Route::get('/portfolio', [ IndexPage::class, 'portfolio' ])->name('portfolio');
    Route::get('/services', [ IndexPage::class, 'services' ])->name('services');
    Route::get('/skills', [ IndexPage::class, 'skills' ])->name('skills');
    Route::get('/testimonials', [ IndexPage::class, 'testimonials' ])->name('testimonials');
    Route::get('/gopdf', [UserController::class, 'export']);

    Route::resource('edit', UserController::class);

});

// ADMIN PAGES
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function (){
    Route::get('/', function (){return redirect(route('index'));});
});
