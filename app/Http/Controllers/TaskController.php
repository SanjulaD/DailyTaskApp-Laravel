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
    }

    public function UpdateTaskAsCompleted($id) {

        $task = Task::find($id);
        $task -> iscompleted = 1;
        $task -> save();
        return redirect() -> back();
        return view('tasks');

    }

    public function UpdateTaskAsNotCompleted($id) {

        $task = Task::find($id);
        $task -> iscompleted = 0;
        $task->save();
        return redirect() -> back();

    }

    public function DeleteTask($id) {

        $task = Task::find($id);
        $task -> delete();
        return redirect() -> back();

    }
}
