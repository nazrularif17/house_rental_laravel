<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentPropertyController;
use App\Http\Controllers\StudentRoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminRoomController;
use App\Http\Controllers\AdminOwnerController;
use App\Http\Controllers\AdminPropertyController;
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

Route::get('/student', [StudentController::class, 'student'])->name('student');
Route::post('/studentregister', [StudentController::class, 'studentregister'])->name('studentregister');
Route::post('/studentlogin', [StudentController::class, 'studentlogin'])->name('studentlogin');
Route::get('/index', [StudentController::class, 'index'])->name('index');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::post('/adminregister', [AdminController::class, 'adminregister'])->name('adminregister');
Route::post('/adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [StudentController::class, 'logout'])->name('logout');
Route::post('logout', [AdminController::class, 'logout'])->name('logout');
Route::resource('property', StudentPropertyController::class);
Route::resource('room', StudentRoomController::class);
Route::resource('students', AdminStudentController::class);
Route::resource('owners', AdminOwnerController::class);
Route::resource('bilik', AdminRoomController::class);
Route::resource('rumah', AdminPropertyController::class);


#Route::get('students/{student}, function apa($User $student))