<?php

use App\Http\Controllers\SekolahController;
use Illuminate\Support\Facades\Route;
use App\Models\sekolah;
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

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/Sekolah',[SekolahController::class, 'index'])-> name('sekolah.index');
Route::get('/Sekolah/tambah',[SekolahController::class, 'tambah'])-> name('sekolah.tambah');
Route::post('/sekolah',[SekolahController::class, 'simpan'])-> name('sekolah.simpan');
Route::get('/Sekolah/{id}/edit',[SekolahController::class, 'edit'])-> name('sekolah.edit');
Route::put('/Sekolah/{id}',[SekolahController::class, 'update'])-> name('sekolah.update');
Route::delete('/sekolah/{id}',[SekolahController::class, 'destroy'])-> name('sekolah.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
