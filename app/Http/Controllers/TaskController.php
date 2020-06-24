<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function form()
    {
        $task = Task::get();
        return view('task.show', compact('task'));
    }
    public function save(Request $request)
    {
        Task::create([
            'task' => $request->task,
            'tag' => $request->tag,
        ]);
        return redirect()->route('task.show', [$request->task]);
    }
}
