<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-student', [TestController::class, 'addStudent']);
Route::get('/add-post', [TestController::class, 'addPost']);
Route::get('/get-student', [TestController::class, 'getStudent']);
Route::get('/get-post', [TestController::class, 'getPost']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'formSubmit'])->name('form.formsubmit');

Route::get('/add-employee', [EmployeeController::class, 'addEmployee']);
Route::get('/employees', [EmployeeController::class, 'getEmployee']);


