<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class KirtasiyeController extends Controller
{
    public function form()
    {
        $kirtasiye =Urun::where('group_id','=','4')->get();
        return view('kirtasiye.form', compact('kirtasiye'));
    }
}
