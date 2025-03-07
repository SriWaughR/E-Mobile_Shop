<?php


use App\Http\Controllers\MobileController;
use Illuminate\Support\Facades\Route; 

Route::get("/",[MobileController::class,'index'])->name('index');

Route::get("products/create",[MobileController::class,'create']);

Route::get("products/{id}/edit",[MobileController::class,'edit']);

Route::get("products/{id}/detail",[MobileController::class,'detail']);

Route::post("products/store",[MobileController::class,'store']);

Route::put("products/{id}/update",[MobileController::class,'update']);

Route::get("products/{id}/destroy",[MobileController::class,'destroy']);

