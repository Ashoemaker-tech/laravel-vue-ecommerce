<?php

use Inertia\Inertia;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('show');

Route::middleware('auth')->group(function () {
    // Authenticated routes will send to login if not authenticated
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard/Dashboard');
    })->name('dashboard');
    Route::get('dashboard/products', [ProductController::class, 'index'])->name('dashboard.products');
    Route::post('dashboard/products/add', [ProductController::class, 'store'])->name('dashboard.add');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
