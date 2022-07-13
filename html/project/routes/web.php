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

Route::get('office_mas',[App\Http\Controllers\OfficeMasterController::class,'index']);
Route::post('office_mas',[App\Http\Controllers\OfficeMasterController::class,'index']);
Route::get('office_trans',[App\Http\Controllers\OfficeTranController::class,'index']);
Route::post('office_trans',[App\Http\Controllers\OfficeTranController::class,'index']);


