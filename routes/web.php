<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

// Training routes
Route::get('/trainings', [TrainingController::class, 'index']);
Route::get('/trainings/create', [TrainingController::class, 'create']);
Route::post('/trainings', [TrainingController::class, 'store']);
Route::get('/trainings/{training}', [TrainingController::class, 'show']);
Route::get('/trainings/{training}/edit', [TrainingController::class, 'edit']);
Route::put('/trainings/{training}', [TrainingController::class, 'update']);
Route::delete('/trainings/{training}', [TrainingController::class, 'destroy']);

// Booking routes
Route::get('/bookings', [BookingController::class, 'index']);
Route::get('/bookings/create', [BookingController::class, 'create']);
Route::post('/bookings', [BookingController::class, 'store']);
Route::get('/bookings/{booking}', [BookingController::class, 'show']);
Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit']);
Route::put('/bookings/{booking}', [BookingController::class, 'update']);
Route::delete('/bookings/{booking}', [BookingController::class, 'destroy']);

// Payment routes
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/payments/create', [PaymentController::class, 'create']);
Route::post('/payments', [PaymentController::class, 'store']);
Route::get('/payments/{payment}', [PaymentController::class, 'show']);
Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit']);
Route::put('/payments/{payment}', [PaymentController::class, 'update']);
Route::delete('/payments/{payment}', [PaymentController::class, 'destroy']);




require __DIR__ . '/auth.php';
