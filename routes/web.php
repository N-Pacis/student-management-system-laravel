<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/students/all",'App\Http\Controllers\StudentsController@showAll');
Route::post("/students/new",'App\Http\Controllers\StudentsController@store');

Route::get("/courses/all",'App\Http\Controllers\CoursesController@showAll');
Route::post("/courses/new",'App\Http\Controllers\CoursesController@store');

Route::resource('/courses','App\Http\Controllers\CoursesController');
Route::resource('/students','App\Http\Controllers\StudentsController');
