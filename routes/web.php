<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/employer')->group(function(){
    Route::get('/list',[EmployerController::class,'index'])->name('employer.index');
    Route::get('/create',[EmployerController::class,'create'])->name('employer.create');
    Route::post('/store',[EmployerController::class,'store'])->name('employer.store');
    Route::delete('/{id}/delete',[EmployerController::class,'destroy'])->name('employer.delete');
    Route::get('/{id}/edit',[EmployerController::class,'edit'])->name('employer.edit');
    Route::put('/{id}/update',[EmployerController::class,'update'])->name('employer.update');
});

Route::prefix('/position')->group(function(){
    Route::get('/list',[PositionController::class,'index'])->name('position.index');
    Route::get('/create',[PositionController::class,'create'])->name('position.create');
    Route::post('/store',[PositionController::class,'store'])->name('position.store');
    Route::delete('/{id}/delete',[PositionController::class,'destroy'])->name('position.delete');
    Route::get('/{id}/edit',[PositionController::class,'edit'])->name('position.edit');
    Route::put('/{id}/update',[PositionController::class,'update'])->name('position.update');
});
