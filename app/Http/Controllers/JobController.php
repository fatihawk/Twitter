<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{

    public function form()
    {
        $job = Job::get();
        return view('job.show', compact('job'));
    }
    public function save(Request $request)
    {

        if ($request->has('id')) {
           Job::find($request->id)->update([
            'job'=>$request->job
           ]);
        } else {
            Job::create([
                'job'=>$request->job
            ]);
        }
        return redirect()->route('job.show');
    }
}
