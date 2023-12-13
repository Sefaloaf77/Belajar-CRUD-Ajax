<?php

use App\Http\Controllers\CrudController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CrudController::class, 'index']);
Route::get('/read', [CrudController::class, 'read']);
Route::get('/create', [CrudController::class, 'create']);
Route::get('/store', [CrudController::class, 'store']);
Route::get('/edit/{id}', [CrudController::class, 'edit']);
Route::get('/update/{id}', [CrudController::class, 'update']);
Route::get('/destroy/{id}', [CrudController::class, 'destroy']);