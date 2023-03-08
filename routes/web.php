<?php

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

use App\Http\Controllers\EtudiantController;

Route::get('etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');

Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('etudiant.show');

Route::get('etudiant-create', [EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store');

Route::get('etudiant-edit/{etudiant}',[EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}',[EtudiantController::class, 'update'])->name('etudiant.update');

Route::delete('etudiant-edit/{etudiant}',[EtudiantController::class, 'destroy'])->name('etudiant.delete');