<?php

use Illuminate\Support\Facades\Route;
use App\Department;
use App\Role;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Department Routes

Route::get('/departments/create', [App\Http\Controllers\DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments/create', [App\Http\Controllers\DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/index', [App\Http\Controllers\DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{id}/edit', [App\Http\Controllers\DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{id}/edit', [App\Http\Controllers\DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{id}/delete', [App\Http\Controllers\DepartmentController::class, 'destroy'])->name('departments.destroy');

// Roles Routes

Route::get('/roles/index', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
Route::post('/roles/store', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
Route::get('/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{id}/edit', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{id}/delete', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');
