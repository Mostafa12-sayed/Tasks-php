<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::name('todo.')->prefix('/todo')->group(function(){
    Route::get('/trush' ,  [ToDoController::class, 'trush'])->name('trush');
    Route::get('/restore/{id}' ,  [ToDoController::class, 'restore'])->name('restore');
    Route::delete('/delete/{id}' ,  [ToDoController::class, 'forceDelete'])->name('forceDelete');
    });

Route::resource('/todo', ToDoController::class);
