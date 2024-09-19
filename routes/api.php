<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('register',[TaskApiController::class,'Register']);

Route::post('login',[TaskApiController::class,'Login']);

Route::get('auth_check',[TaskApiController::class,'Check']);




Route::group(['middleware'=>"auth:sanctum"],function(){



    Route::post('insert_data',[TaskApiController::class,'Insert_data']);

    Route::get('all_tasks', [TaskApiController::class,'All_tasks']);

    Route::get('filter_data', [TaskApiController::class,'Filter_data']);

    Route::delete('task/{id}',[TaskApiController::class,'Delete_task']);

    Route::get('task_data/{id}',[TaskApiController::class,'Task_data']);

    Route::put('update_task/{id}',[TaskApiController::class,'Update_task']);
    





    Route::post('logout',[TaskApiController::class,'Logout']);


});

