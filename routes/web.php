<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PersonneController;
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

// FRONT
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/personnes/liste', [FrontController::class, 'personnesList'])->name('personnesList');

// BACK

// CRUD - Show
Route::get('/personne/show/{id}', [PersonneController::class, 'show'])->name('show.personne');


// CRUD - Edit/Update
Route::get('/personne/edit/{id}', [PersonneController::class, 'edit'])->name('edit.personne');
Route::put('/personne/update/{id}', [PersonneController::class, 'update'])->name('update.personne');

// CRUD - Delete
Route::delete('/personne/delete/{id}', [PersonneController::class, 'destroy'])->name('destroy.personne');

// CRUD - Delete All
Route::get('/admin/clearTable', [PersonneController::class, 'clearTable'])->name('clearTable');