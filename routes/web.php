<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('employee', [EmployeeController::class, 'create'])->name('employee.create');
// Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::resource('employee', EmployeeController::class);//use of this will help to make default route to navigate from one page to another by default.

// Note:
// => Command for the the resource default route is
// php artisan make:model Employee -mcr
// this above commands has mcr which has indivisual meaning as:
// m-> migration
// c->Controller
// r->resources