<?php

use App\Http\Controllers\BudgetCreationController;
use App\Http\Controllers\BudgetManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
    return view('login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/budget-creation-form', [BudgetCreationController::class, 'showForm'])->name('budgetCreationForm');
    Route::get('/budget-management-history', [BudgetManagementController::class, 'index'])->name('budgetManagementHistory');
    Route::get('/budget-management-charts', [BudgetManagementController::class, 'indexCharts'])->name('budgetManagementCharts');
    Route::get('/budget_management_addform', [BudgetManagementController::class, 'indexAddform'])->name('budgetManagementAddform');
    Route::get('/budget_management_extract', [BudgetManagementController::class, 'indexExtract'])->name('budgetManagementExtract');
    Route::get('/bcf', [BudgetCreationController::class, 'bcf'])->name('bcf');

    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
