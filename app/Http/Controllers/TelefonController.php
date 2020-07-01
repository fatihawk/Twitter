<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class TelefonController extends Controller
{
    public function form()
    {
        $telefon =Urun::where('group_id','=','6')->get();
        return view('telefon.form', compact('telefon'));
    }
}
