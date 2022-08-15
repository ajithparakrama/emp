<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MonthSalaryController;
use App\Http\Controllers\roles;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {    return view('welcome');});
Auth::routes();
//Route::group(['middleware' => ['auth']], function() {
    Route::middleware(['auth', 'PreventBackHistory'])->group(function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('employee/salary/{employee}', [EmployeeController::class,'salary'])->name('employee.salary');
Route::post('employee/addsalary/{employee}',[EmployeeController::class,'addSalary'])->name('employee.addSalary');
Route::resource('employee', EmployeeController::class);
Route::get('user/inactive/{user}',[userController::class,'inactive'])->name('user.inactive');
Route::get('user/active/{user}',[userController::class,'active'])->name('user.active');
Route::get('user/susspend/',[userController::class,'susspend'])->name('user.susspend');
Route::resource('user',userController::class);

Route::get('roles/inactive/{roles}',[roles::class,'inactive'])->name('roles.inactive');
Route::get('roles/active/{roles}',[roles::class,'active'])->name('roles.active');
Route::get('roles/susspend/',[roles::class,'susspend'])->name('roles.susspend');
Route::resource('roles', roles::class);


//Route::resource('month-salary', MonthSalaryController::class);

    });
//});

