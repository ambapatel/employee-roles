<?php

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

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();
/**
 * Load Dashboard of Admin
 */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
 * CRUD Operation of Role Module
 */
Route::get('/role', [App\Http\Controllers\RoleController::class, 'index'])->name('role');
Route::get('/role/create', [App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
Route::get('/role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
Route::post('/role/save', [App\Http\Controllers\RoleController::class, 'save'])->name('role.save');
Route::put('/role/update/{id}', [App\Http\Controllers\RoleController::class, 'save'])->name('role.update');
Route::delete('/role/destroy/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('role.destroy');


/**
 * CRUD Operation of Employee Module
 */
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee');
Route::get('/employee/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employee.create');
Route::get('/employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/save', [App\Http\Controllers\EmployeeController::class, 'save'])->name('employee.save');
Route::put('/employee/update/{id}', [App\Http\Controllers\EmployeeController::class, 'save'])->name('employee.update');
Route::delete('/employee/destroy/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
