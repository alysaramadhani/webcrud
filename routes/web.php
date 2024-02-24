<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\StudentsController;
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

/* Route If Non Logged In */
Route::middleware('guest')->group(function () {

    // Login Page
    Route::get('/login', [LoginController::class, 'loginPage'])->name('login.page');
    Route::get('/register', [RegisterController::class, 'registerPage'])->name('register.page');

    // Login Action
    Route::post('/login', [LoginController::class, 'login'])->name('login.exec');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.exec');

});

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/student', [StudentsController::class, 'index'])->name('student.index');
Route::get('/', [Controller::class, 'Dashboard'])->name('dashboard');
Route::get('/about', [Controller::class, 'About'])->name('about');
Route::get('/ekskul', [Controller::class, 'Ekskul'])->name('ekskul');

Route::middleware('auth')->group(function () {

    // Kelas Page
    Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
    Route::get('/kelas/edit/{kelas}', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');
    Route::post('/kelas/update/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
    Route::post('/kelas/destroy/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');

    // Student Page
    Route::get('/student/edit/{id}', [StudentsController::class, 'edit'])->name('student.edit');
    Route::post('/student/store', [StudentsController::class, 'store'])->name('student.store');
    Route::post('/student/update/{id}', [StudentsController::class, 'update'])->name('student.update');
    Route::post('/student/destroy/{id}', [StudentsController::class, 'destroy'])->name('student.destroy');
    Route::get('/student/create', [StudentsController::class, 'create'])->name('student.create');

    // Logout Action
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

});
