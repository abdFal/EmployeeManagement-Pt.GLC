<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalarySlipsController;
use Illuminate\Support\Facades\Route;

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
    return redirect('register');
});
Route::get('/employees', [EmployeesController::class,'index'])->name('employees');
Route::get('/employeedetails', [ProfileController::class,'index'])->name('profile.index');

Route::get('/employees/create', [EmployeesController::class, 'create']);
Route::post('/employees', [EmployeesController::class, 'store']);

//Salary Slip Route
Route::get('/salary-slips', [SalarySlipsController::class, 'index'])->name('salary-slips');
Route::post('/salary-slips', [SalarySlipsController::class, 'store'])->name('salary-slips.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
