<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function form()
    {
        $tasks = Task::where("iscompleted", false)->get();
        $completed_tasks = Task::where("iscompleted", true)->get();
        return view('task.show', compact('tasks', 'completed_tasks'));
    }
    public function save(Request $request)
    {

        Task::create([
            'task' => $request->task,
            'iscompleted' => $request->iscompleted,
        ]);

        return Redirect::back()->with("message", "Task has been added");
    }    
    public function complete($id)
    {
        $task = Task::find($id);
        $task->iscompleted = true;
        $task->save();
        return Redirect::back()->with("message", "Task has been added to completed list");
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return Redirect::back()->with('message', "Task has been deleted");
    }
}
