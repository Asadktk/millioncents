<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Admin Ruote
Route::prefix('admin')->group(function(){
    Route::get('/admin', [AdminController::class, 'create'])->name('admin_register_form');
    Route::post('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::get('/adminlogincreat', [AdminController::class, 'login'])->name('admin_login_form');
    Route::post('/adminloginstore', [AdminController::class, 'authenticateadmin'])->name('admin.login');
    // Route::get('/login', [AdminController::class, ''])->name('');
});

// User Ruote
Route::prefix('/user')->group(function(){
    Route::get('/user', [UserController::class, 'create'])->name('user_register_form');
    Route::post('/register', [UserController::class, 'store'])->name('user.register');
    Route::get('/userlogin', [UserController::class, 'login'])->name('user_login_form');
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('user.login');
    //User Logout
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
    // Route::get('/login', [AdminController::class, ''])->name('');
});

Route::view('/', 'frontend.dashboard');
Route::view('/about', 'frontend.about.about');
Route::view('/services', 'frontend.services.services');
Route::get('/contact', [ContactController::class, 'index']);
Route::view('/media', 'frontend.media.media');
Route::view('/introduction', 'frontend.introduction.introduction');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
