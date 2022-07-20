<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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



Route::get('/about' ,[AboutController::class,'index']);
Route::get('/admin' ,[AdminController::class,'index']);
Route::get('/member' ,[MemberController::class,'index']);
Route::get('/student' ,[StudentController::class,'index']);
Route::get('/teacher' ,[TeacherController::class,'index']);
Route::get('/home' ,[HomeController::class,'index']);
Route::get('/login' ,[LoginController::class,'index']);