<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\ActivityController;

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
Route::get('/hello', function () {
    return view('shared.navbar');
});

//get routes
Route::get('/officers',[OfficerController::class,'index'])->name('index-officer');
Route::get('/update',[OfficerController::class,'edit'])->name('update-officer');
Route::get('/visitor',[VisitorController::class,'index'])->name('index-visitor');
Route::get('/activity',[ActivityController::class,'index'])->name('index-activity');


//post routes
Route::post('/addvisitor',[VisitorController::class,'store']);