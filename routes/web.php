<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KostController;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');
Route::get('/', [KostController::class, 'home'])->name('home');

// Route::get('/kost-detail', function () {
//     return view('components.detail-kost');
// });

Route::get('/testing', function () {
    return view('testing');
});
Route::get('/kost-detail/{id}', [KostController::class, 'detail']);

Route::get('/search', [KostController::class, 'search'])->name('components.search');

Route::get('/help-center', function () {
    return view('components.help-center');
})->name('help-center');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('posts', PostController::class);
    Route::resource('kosts', KostController::class);
});

require __DIR__.'/auth.php';
