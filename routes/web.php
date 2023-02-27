<?php

use App\Http\Controllers\CustomerCourser;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StrudentForController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Company;
use App\Models\Comment;
use App\Models\Post;
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
        return view('welcome');
    });

    // Route::get('/employeData', [EmployeeController::class, 'show']);
    // Route::get('/employeAllData', [EmployeeController::class, 'dataShow']);
    Route::get('/classes', [StudentController::class, 'classShow']);
    Route::get('/data', [StudentController::class, 'showData']);
    Route::get('/check', [StudentController::class, 'testData']);
    Route::get('/companyCheck', [EmployeeController::class, 'showData']);
    Route::get('/belongstoData', [EmployeeController::class,'showBelognstoData']);
    Route::get('/getComments', [PostController::class, 'getComments']);
    Route::get('/AllComments', [PostController::class, 'postBelongsTo']);
    Route::get('/HasMany', [StrudentForController::class, 'showHasMany']);
    Route::get('/showStudent', [StrudentForController::class, 'showClassToStudent']);
    Route::get('/Customer', [CustomerCourser::class, 'Customer']);
    Route::post('/get-customer', [CustomerCourser::class, 'get_customer']);

    
    
    // Route::get('/belongstoData', [EmployeeController::class,'']);

    

