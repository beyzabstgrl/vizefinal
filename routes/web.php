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


     Route::get('/studentlist', [StudentController::class, 'index'])->name('studentlist');
     Route::get('/notformu', [NotController::class, 'show'])->name('notform');
      Route::post('/notgonder', [NotController::class, 'notlar'])->name('notformgonder');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
