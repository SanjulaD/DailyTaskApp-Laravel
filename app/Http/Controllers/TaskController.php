<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request) {


        $this->validate($request , [
            'task' => ' required | max:100 | min:5 '
        ]);

        // dd($request->all());
        $task = new Task;

        $task->task=$request->task;
        $task->save();

        $dataAll = Task::all();
        // dd($dataAll);

        return view('tasks')->with('tasks' , $dataAll);

        // return redirect()->back();
        // return view('/task');
    
    }
}
