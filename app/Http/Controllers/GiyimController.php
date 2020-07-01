<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class GiyimController extends Controller
{
    public function form()
    {
        $giyim =Urun::where('group_id','=','8')->get();
        return view('giyim.form', compact('giyim'));
    }
}

