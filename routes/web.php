<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use  App\Models\Phone;

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
    Route::get('/', function(){
        echo "hello";
    });

    // Route::get('/employeData', [EmployeeController::class, 'show']);
    // Route::get('/employeAllData', [EmployeeController::class, 'dataShow']);
    Route::get('/classes', [StudentController::class, 'classShow']);
    Route::get('/data', [StudentController::class, 'showData']);
    Route::get('/check', [StudentController::class, 'testData']);


