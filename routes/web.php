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

/** COMPANYS ROUTES */

// Route to show list of companies
Route::get('/dashboard/companys', [CompanysController::class, 'index']);

// Route to render creation company form
Route::get('/dashboard/companys/create', [CompanysController::class, 'create']);

// Route to store new company in database
Route::post('/dashboard/companys/store', [CompanysController::class, 'store']);

// Route to render confirm delete company page
Route::get('/dashboard/companys/delete/{name}/{id}', function($name, $id){
    return view('confirmDeleteCompany', ['name' => $name,'id' => $id]);
})->middleware(['auth']);

// Route to delete company from database
Route::get('/dashboard/companys/delete/{id}', [CompanysController::class, 'destroy']);

// Route to edit company
Route::get('/dashboard/companys/edit/{id}', [CompanysController::class, 'edit']);

// Route to update company
Route::patch('/dashboard/companys/update', [CompanysController::class, 'update']);

//Route to search
Route::get('/dashboard/companys/search', [CompanysController::class, 'show']);


/** EMPLOYEES ROUTES */

// Route to show list of employees
Route::get('/dashboard/employees', [EmployeesController::class, 'index']);

// Route to render creation employee form
Route::get('/dashboard/employees/create', [EmployeesController::class, 'create']);

// Route to store new employee in database
Route::post('/dashboard/employees/store', [EmployeesController::class, 'store']);

// Route to render confirm delete employee page
Route::get('/dashboard/employees/delete/{id}', function(){
    return view('confirmEmployeeDelete');
})->middleware(['auth']);

// Route to delete employee from database
Route::post('/dashboard/employees/delete/{id}', [EmployeesController::class, 'destroy']);

require __DIR__.'/auth.php';
