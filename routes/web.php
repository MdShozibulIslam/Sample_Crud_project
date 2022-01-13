<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'showData']);
Route::get('/add', [EmployeeController::class, 'addData']);
Route::post('/store', [EmployeeController::class, 'storeData']);
Route::get('/edit/{id}', [EmployeeController::class, 'editData']);
Route::post('/update/{id}', [EmployeeController::class, 'updateData']);
Route::get('/delete/{id}', [EmployeeController::class, 'deleteData']);
