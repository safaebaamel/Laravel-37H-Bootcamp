<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\MailController;

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
})->name('landingpage');

Route::get('/admin/home', function () {
    return view('welcome');
})->name('admin')->middleware('auth');

Route::get('/home/about', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/home/ourCommunity', function () {
    return view('ourCommunity');
})->name('ourCommunity');

Route::get('/home/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/home/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/auth/login', [MainController::class, 'login'])->name('auth.login');
Route::get('/auth/logout', [MainController::class, 'logout'])->name('logout');
Route::post('/auth/check', [MainController::class, 'check'])->name('auth.check');

Route::get('/admin/dashboard', [MainController::class, 'dashboard'])->name('dashboard');



Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments/create', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/index', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/{id}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{id}/edit', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{id}/delete', [DepartmentController::class, 'destroy'])->name('departments.destroy');

// Roles Routes

Route::get('/roles/index', [RoleController::class, 'index'])->name('roles.index');
Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/roles/{id}/edit', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/roles/{id}/delete', [RoleController::class, 'destroy'])->name('roles.destroy');

// Employee User Routes

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/create', [UserController::class, 'store'])->name('users.store');
Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/user/{id}/edit', [UserController::class, 'update'])->name('users.update');
Route::delete('/user/{id}/delete', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/home', [HomeController::class, 'index'])->name('home');

// Permission Routes


Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
Route::post('/permissions/create', [PermissionController::class, 'store'])->name('permissions.store');
Route::get('/permissions/index', [PermissionController::class, 'index'])->name('permissions.index');
Route::get('/permission/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
Route::put('/permission/{id}/edit', [PermissionController::class, 'update'])->name('permissions.update');
Route::delete('/permission/{id}/delete', [PermissionController::class, 'destroy'])->name('permissions.destroy');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Leave Routes

Route::get('/leaves/create', [LeaveController::class, 'create'])->name('leaves.create');
Route::post('/leaves/create', [LeaveController::class, 'store'])->name('leaves.store');
Route::get('/leaves/index', [LeaveController::class, 'index'])->name('leaves.index');
Route::get('/leave/{id}/edit', [LeaveController::class, 'edit'])->name('leaves.edit');
Route::put('/leave/{id}/edit', [LeaveController::class, 'update'])->name('leaves.update');
Route::delete('/leave/{id}/delete', [LeaveController::class, 'destroy'])->name('leaves.destroy');
Route::post('/accept-reject-leave/{id}', [LeaveController::class, 'acceptReject'])->name('accept.reject');


// Notice Routes

Route::get('/notices/index', [NoticeController::class, 'index'])->name('notices.index');
Route::get('/notices/create', [NoticeController::class, 'create'])->name('notices.create');
Route::post('/notices/create', [NoticeController::class, 'store'])->name('notices.store');
Route::get('/notices/{id}/edit', [NoticeController::class, 'edit'])->name('notices.edit');
Route::put('/notices/{id}/edit', [NoticeController::class, 'update'])->name('notices.update');
Route::delete('/notices/{id}/delete', [NoticeController::class, 'destroy'])->name('notices.destroy');


// Mail Routes

Route::get('/mails/index', [MailController::class, 'index'])->name('mails.index');
Route::get('/mails/create', [MailController::class, 'create'])->name('mails.create');
Route::post('/mails/create', [MailController::class, 'store'])->name('mails.store');
