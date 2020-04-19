<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $data = App\Task::all();
    return view('tasks')->with('tasks' , $data);
});

Route::post('/saveTask', 'taskController@store');

Route::get('/markAsCompleted/{id}' , 'taskController@UpdateTaskAsCompleted');

Route::get('/markAsNotCompleted/{id}' , 'taskController@UpdateTaskAsNotCompleted');

Route::get('/deleteTask/{id}' , 'taskController@DeleteTask');