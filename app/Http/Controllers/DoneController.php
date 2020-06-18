<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Done;

class DoneController extends Controller
{
    public function save(Request $request)
    {
        Done::create([
            'job_id' => $request->job_id,
            'text' => $request->text,
        ]);
        return redirect()->route('job.show', [$request->job_id]);
    }
    public function show($id)
    {
        $completed = Done::find($id);
        return view('job.show', compact('completed'));
    }

}
