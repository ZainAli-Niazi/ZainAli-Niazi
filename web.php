<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Dashboard routes
Route::get('/dashboard.admin', [DashboardController::class, 'admin'])->name('dashboard.admin');


// Student Routes 
Route::get('/students.create', [StudentController::class, 'create'])->name('students.create');
Route::get('/students.list', [StudentController::class, 'list'])->name('students.list');


// Teachers Routes 
Route::get('/teachers.create', [TeacherController::class, 'create'])->name('teachers.create');