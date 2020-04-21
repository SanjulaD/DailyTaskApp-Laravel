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

    public function UpdateTaskView($id) {

        $task = Task::find($id);
        return view('updatetask')->with('taskdata' , $task);

    }
    
    public function updateTask(Request $request) {

        $id = $request->id;
        $task = $request->task;
        $data = Task::find($id);
        $data->task = $task;
        $data->save();

        $datas = Task::all();
        return view('tasks')->with('tasks',$datas);

    }
 }
