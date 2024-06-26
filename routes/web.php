<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;


Route::put('supports/{id}',[SupportController::class,'update'])->name('supports.update');
Route::get('supports/{id}/edit',[SupportController::class,'edit'])->name('supports.edit');
Route::get('/supports/{id}',[SupportController::class,'show'])->name('supports.show');
Route::post('/suports/store',[SupportController::class,'store'])->name('supports.store');
Route::get('/supports/create',[SupportController::class,'create'])->name('supports.create');
Route::get('/supports',[SupportController::class,'index'])->name('supports.index');

