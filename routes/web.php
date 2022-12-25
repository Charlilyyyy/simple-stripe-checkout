<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OrderDataController;

Route::get('/',[HomepageController::class,'index'])->name('home');
Route::resource('/orderdata',OrderDataController::class);
