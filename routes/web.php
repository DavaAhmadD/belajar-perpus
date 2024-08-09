<?php

use App\Http\Controllers\BukuController;
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

Route::get('admin', function(){
    return '<h1>Hello Admin</h1>';
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('user', function(){
    return '<h1>Hello user</h1>';
})->middleware(['auth', 'verified', 'role:user|admin']);

Route::get('operator', function(){
    return '<h1>Hello operator</h1>';
})->middleware(['auth', 'verified', 'role:operator']);

Route::get('/daftarbuku',[BukuController::class, 'index'])->name('buku.index');
Route::get('/add_daftar_buku',[BukuController::class, 'create'])->name('buku.create');
Route::post('/add_daftar_buku/save',[BukuController::class, 'store'])->name('buku.store');
Route::delete('/daftarbuku/delete/{id}',[BukuController::class, 'destroy'])->name('buku.destroy');

require __DIR__.'/auth.php';
