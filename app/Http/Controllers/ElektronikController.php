<?php

namespace App\Http\Controllers;

use App\Urun;
use Illuminate\Http\Request;

class ElektronikController extends Controller
{
    public function form()
    {
        $elektronik =Urun::where('group_id','=','1')->get();
        return view('elektronik.form', compact('elektronik'));
    }
}
