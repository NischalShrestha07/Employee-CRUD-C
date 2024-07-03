<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('employee', [EmployeeController::class, 'create'])->name('employee.create');
// Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::resource('employee', EmployeeController::class);
