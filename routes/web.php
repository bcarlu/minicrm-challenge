<?php

use Illuminate\Support\Facades\Route;

//import controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanysController;
use App\Http\Controllers\EmployeesController;


Route::get('/', function () {
    return view('welcome');
});

//Route to show admin options and data resume
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route to show list of companies
Route::get('/dashboard/companys', [CompanysController::class, 'index']);

// Route to render creation company form
Route::get('/dashboard/companys/create', [CompanysController::class, 'create']);

// Route to store new company in database
Route::post('/dashboard/companys/store', [CompanysController::class, 'store']);

// Route to render confirm delete company page
Route::get('/dashboard/companys/delete/{id}', function(){
    return view('confirmCompanyDelete');
});

// Route to delete company from database
Route::post('/dashboard/companys/delete/{id}', [CompanysController::class, 'destroy']);

// Route to show list of companies
Route::get('/dashboard/employees', [EmployeesController::class, 'index']);

// Route to render creation employee form
Route::get('/dashboard/employees/create', [EmployeesController::class, 'create']);

// Route to store new employee in database
Route::post('/dashboard/employees/store', [EmployeesController::class, 'store']);

// Route to render confirm delete employee page
Route::get('/dashboard/employees/delete/{id}', function(){
    return view('confirmEmployeeDelete');
});

// Route to delete employee from database
Route::post('/dashboard/employees/delete/{id}', [EmployeesController::class, 'destroy']);

require __DIR__.'/auth.php';
