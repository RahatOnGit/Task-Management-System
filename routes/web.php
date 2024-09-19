<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'Main_Route']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




Route::get('/home',[HomeController::class,'Home'])->middleware(['auth', 'verified'])->name('home');

Route::get('add_new_task',[HomeController::class,'Add_new_task'])->middleware(['auth', 'verified']);

Route::post('insert_data',[HomeController::class,'Insert_data'])->middleware(['auth', 'verified']);

Route::get('all_tasks', [HomeController::class,'All_tasks'])->middleware(['auth', 'verified']);

Route::get('get_data', [HomeController::class,'Get_data'])->middleware(['auth', 'verified']);

Route::get('delete_task/{id}',[HomeController::class,'Delete_task'])->middleware(['auth', 'verified']);

Route::get('edit_task/{id}',[HomeController::class,'Edit_task'])->middleware(['auth', 'verified']);

Route::post('update_data/{id}',[HomeController::class,'Update_data'])->middleware(['auth', 'verified']);
