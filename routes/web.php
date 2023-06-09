<?php

use App\Http\Controllers\OrderController;
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
Route::get('show/{id}', [ProtienController::class, 'show'])->name('showProtien');
Route::post('/orders', [OrderController::class, 'store'])->name("orderStore");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //profie_routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //protiens_routes
    Route::get('/protiens', [ProtienController::class, 'indexAuth'])->name('protiens');
    Route::post('/protiens', [ProtienController::class, 'store'])->name('protienStore');
    Route::post('/protiens/update', [ProtienController::class, 'update'])->name('protiensUpdate');
    Route::delete('protiens/{id}', [ProtienController::class, 'destroy'])->name('deleteProtien');

    //trash_protien_routes
    Route::get('/protiens/trash', [ProtienController::class, 'trash'])->name('protiensTrash');
    Route::post('/protiens/update/trash', [ProtienController::class, 'updateFromTrash'])->name('updateFromTrash');
    Route::post('/protiens/restore/{id}', [ProtienController::class, 'restore'])->name('restoreProtien');
    Route::delete('protiens/force/{id}', [ProtienController::class, 'fdelete'])->name('forceDeleteProtien');


    //order_routes
    Route::get('/orders/incomming', [OrderController::class, 'index'])->name("orders");
    Route::get('/orders/trash', [OrderController::class, 'trash'])->name("ordersTrash");
    Route::get('/orders/underProcessing', [OrderController::class, 'underProcessingIndex'])->name("underProcessingOrders");
    Route::get('/orders/done', [OrderController::class, 'doneIndex'])->name("doneOrders");
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name("showOrder");
    Route::get('/orders/trash/{id}', [OrderController::class, 'showTrash'])->name("showTrashOrder");
    Route::post('/orders/underProcessingOrder/{id}', [OrderController::class, 'underProcessingOrder'])->name("updateToUnderProcessingOrder");
    Route::post('/orders/doneOrder/{id}', [OrderController::class, 'doneOrder'])->name("updateToDoneOrder");
    Route::delete('/orders/delete/{id}', [OrderController::class, 'destroy'])->name("updateToDeleteOrder");
    Route::post('/orders/restore/{id}', [OrderController::class, 'restore'])->name("restoreOrder");
});

require __DIR__ . '/auth.php';
