<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/{id}', [StudentController::class, 'edit']);
Route::post('/student', [StudentController::class, 'store'])->name('student.store');