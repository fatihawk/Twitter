<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class MuzikController extends Controller
{
    public function form()
    {
        $muzik =Urun::where('group_id','=','10')->get();
        return view('muzik.form', compact('muzik'));
    }
}
