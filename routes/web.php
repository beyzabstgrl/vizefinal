<?php

use App\Http\Controllers\NotController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'hoca'])->group(function () {
    // Sadece "hoca" rolüne sahip kullanıcılara erişilebilen rotalar
    Route::post('/notguncelle/{id}', [StudentController::class, 'edit'])->name('notguncelle');
    Route::get('/notformu', [NotController::class, 'show'])->name('notform');
    Route::post('/notgonder', [StudentController::class, 'notlar'])->name('notformgonder');
});


     Route::get('/studentlist', [StudentController::class, 'index'])->name('studentlist');
      Route::get('/student/detail/{id}', [StudentController::class, 'detail'])->name('studentdetail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('front.ogrenciler');
    })->name('dashboard');
});
