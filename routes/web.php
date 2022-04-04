<?php

use App\Http\Controllers\JoueurController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\EquipeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", function () {
	return view("back.admin");
})->name("back.index");
Route::resource('/back/joueur', JoueurController::class);
Route::get('/back/roles', [RoleController::class, 'index'])->name('role.index');
Route::get('/back/roles/{id}/show', [RoleController::class, 'show'])->name('role.show');
Route::resource('/back/photo', PhotoController::class);
Route::resource('/back/equipe', EquipeController::class);
