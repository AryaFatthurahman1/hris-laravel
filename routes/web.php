<?php

use Illuminate\Support\Facades\Route;

// Welcome page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Employees
Route::prefix('employees')->name('employees.')->group(function () {
    Route::get('/', function () {
        return view('employees.index');
    })->name('index');
});

// Attendance
Route::prefix('attendance')->name('attendance.')->group(function () {
    Route::get('/', function () {
        return view('attendance.index');
    })->name('index');
});

// Performance
Route::prefix('performance')->name('performance.')->group(function () {
    Route::get('/', function () {
        return view('performance.index');
    })->name('index');
});

// Payroll
Route::prefix('payroll')->name('payroll.')->group(function () {
    Route::get('/', function () {
        return view('payroll.index');
    })->name('index');
});
