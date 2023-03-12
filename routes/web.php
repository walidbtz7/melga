<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashbaordController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\TraficController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{country?}/search', [HomeController::class, 'show'])->name('country.show');
Route::get('/{country?}/offers', [HomeController::class, 'offers'])->name('offers');
Route::get('/{country?}/offers/{offer?}', [HomeController::class, 'offer'])->name('offers.show');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashbaordController::class, 'index'])->name('dashboard');
    Route::get('/offers', [DashbaordController::class, 'index'])->name('offers');
    Route::get('/countries', [DashbaordController::class, 'index'])->name('countries');
    Route::get('/trafic', [DashbaordController::class, 'index'])->name('trafic');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
