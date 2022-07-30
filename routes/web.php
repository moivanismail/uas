<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/profil', function () {
//     return view('admin.layout.admin-profil');
// });

Route::get('/admin-profile', [App\Http\Controllers\HomeController::class, 'myProfile']);
Route::get('/admin/data', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('example.data');
Route::get('/admin/insert-data', [App\Http\Controllers\HomeController::class, 'create']);
Route::get('/admin/delete-data/{id}', [App\Http\Controllers\HomeController::class, 'destroy']);
Route::get('/admin/edit-data/{id}', [App\Http\Controllers\HomeController::class, 'edit']);
Route::get('/admin/update-data/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::post('/admin/data/insert-data', [App\Http\Controllers\HomeController::class, 'store'])->name('example.insert');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
