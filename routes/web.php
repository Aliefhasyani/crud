<?php

use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/employer')->group(function(){
    Route::get('/list',[EmployerController::class,'index'])->name('employer.index');
    Route::get('/create',[EmployerController::class,'create'])->name('employer.create');
    Route::post('/store',[EmployerController::class,'store'])->name('employer.store');
    Route::delete('/{id}/delete',[EmployerController::class,'destroy'])->name('employer.delete');
    Route::get('/{id}/edit',[EmployerController::class,'edit'])->name('employer.edit');
    Route::put('/{id}/update',[EmployerController::class,'update'])->name('employer.update');
});

