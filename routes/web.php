<?php

use App\Http\Controllers\EmployeeController;
use App\Models\EmployeeList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EmployeeController::class,'list']);

Route::get('edit/{id}',[EmployeeController::class,'editPage']);

Route::post('editing', [EmployeeController::class,'edit'])->name('edit_details');

Route::get('/add',[EmployeeController::class,'addPage']);

Route::post('adding', [EmployeeController::class,'add'])->name('add_details');
