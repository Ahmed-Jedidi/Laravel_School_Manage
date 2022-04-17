<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

//use App\Http\Controllers\UserController;

//Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);

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

Route::resource('students' , StudentsController::class); 

//Route::get('students' , StudentsController::class); 

//Route::post('students' , StudentsController::class); 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/salem', function () {
    return 'salem';
});

/*Route::get('/index', function () {
    return view('index');
});*/