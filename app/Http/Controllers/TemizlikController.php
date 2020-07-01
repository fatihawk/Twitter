<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class TemizlikController extends Controller
{
    public function form()
    {
        $temizlik =Urun::where('group_id','=','3')->get();
        return view('temizlik.form', compact('temizlik'));
    }
}
