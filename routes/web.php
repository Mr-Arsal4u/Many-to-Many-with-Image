<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;



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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('post-login', [AuthController::class, 'post']);
Route::resource('company', CompanyController::class);
Route::resource('employees', EmployeeController::class);


///new routes
Route::get('loginn', [AuthController::class, 'showme'])->name('loginm');
Route::get('companyemployee/{companyId}/{employeeId}', [EmployeeController::class, 'edit'])->name('companyemployee.edit');
Route::put('company/{companyId}/employee/{employeeId}', [EmployeeController::class, 'update'])->name('companyupdate');
Route::delete('companies/{companyId}', [EmployeeController::class, 'destroy'])->name('company.destroy');
