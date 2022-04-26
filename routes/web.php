<?php

use App\Http\Controllers\PetController;
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

Route::get("/", [PetController::class, "index"]);
Route::get("create", [PetController::class, "create"]);
Route::post("store", [PetController::class, "store"]);
Route::get("edit/{id}", [PetController::class, "edit"]);
Route::post("update", [PetController::class, "update"]);
Route::get("delete/{id}", [PetController::class, "destroy"]);
Route::get("search", [PetController::class, "search"]);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
