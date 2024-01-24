<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('guest');
    })->name('guest');

    Route::get('/artikel', function () {
        return view('artikel');
    })->name('artikel');

    Route::get('/dokumentasi', function () {
        return view('dokumentasi');
    })->name('dokumentasi');

    Route::get('/prestasi', function () {
        return view('prestasi');
    })->name('prestasi');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');
        Route::get('/admin-article', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('admin-article');
        Route::get('/admin-dokumentasi', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('admin-dokumentasi');
        Route::get('/admin-prestasi', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('admin-prestasi');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
});
