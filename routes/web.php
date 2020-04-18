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