<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class MutfakController extends Controller
{
    public function form()
    {
        $mutfak =Urun::where('group_id','=','2')->get();
        return view('mutfak.form', compact('mutfak'));
    }
}
