<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class SporController extends Controller
{
    public function form()
    {
        $spor =Urun::where('group_id','=','5')->get();
        return view('spor.form', compact('spor'));
    }
}
