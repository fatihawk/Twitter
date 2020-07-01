<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class KozmetikController extends Controller
{
    public function form()
    {
        $kozmetik =Urun::where('group_id','=','9')->get();
        return view('kozmetik.form', compact('kozmetik'));
    }
}
