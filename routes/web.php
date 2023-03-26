<?php

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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

Route::get('/report', [ReportController::class,'index'])->middleware(['auth', 'verified', 'permission:admin_view'])->name('report');

Route::get('/dashboard',[RoutesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/client',[RoutesController::class, 'client'])->middleware(['auth', 'verified', 'permission:client_view'])->name('client');
Route::get('/supplier',[RoutesController::class, 'supplier'])->middleware(['auth', 'verified', 'permission:supplier_view'])->name('supplier');
Route::get('/intern',[RoutesController::class, 'intern'])->middleware(['auth', 'verified', 'permission:intern_view'])->name('intern');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
