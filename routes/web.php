<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProtienController;
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

Route::get('/', [ProtienController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/protiens',[ProtienController::class,'indexAuth'])->name('protiens');
    Route::post('/protiens/update',[ProtienController::class,'update'])->name('protiensUpdate');
    Route::post('/protiens',[ProtienController::class,'store'])->name('protienStore');
    Route::delete('protiens/{id}',[ProtienController::class,'destroy'])->name('deleteProtien');

});

require __DIR__ . '/auth.php';