<?php

use Illuminate\Support\Facades\Route;
use App\Department;
use App\Role;
use App\User;
use App\Permission;

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
    return view('homePage');
});

Route::get('/admin/home', function () {
    return view('welcome');
})->name('admin')->middleware('auth');

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

// Employee User Routes

Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/user/{id}/edit', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/user/{id}/delete', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Permission Routes


Route::get('/permissions/create', [App\Http\Controllers\PermissionController::class, 'create'])->name('permissions.create');
Route::post('/permissions/create', [App\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');
Route::get('/permissions/index', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
Route::get('/permission/{id}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');
Route::put('/permission/{id}/edit', [App\Http\Controllers\PermissionController::class, 'update'])->name('permissions.update');
Route::delete('/permission/{id}/delete', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Leave Routes

Route::get('/leaves/create', [App\Http\Controllers\LeaveController::class, 'create'])->name('leaves.create');
Route::post('/leaves/create', [App\Http\Controllers\LeaveController::class, 'store'])->name('leaves.store');
Route::get('/leaves/index', [App\Http\Controllers\LeaveController::class, 'index'])->name('leaves.index');
Route::get('/leave/{id}/edit', [App\Http\Controllers\LeaveController::class, 'edit'])->name('leaves.edit');
Route::put('/leave/{id}/edit', [App\Http\Controllers\LeaveController::class, 'update'])->name('leaves.update');
Route::delete('/leave/{id}/delete', [App\Http\Controllers\LeaveController::class, 'destroy'])->name('leaves.destroy');
Route::post('/accept-reject-leave/{id}', [App\Http\Controllers\LeaveController::class, 'acceptReject'])->name('accept.reject');


// Notice Routes

Route::get('/notices/index', [App\Http\Controllers\NoticeController::class, 'index'])->name('notices.index');
Route::get('/notices/create', [App\Http\Controllers\NoticeController::class, 'create'])->name('notices.create');
