<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urun;

class KitapController extends Controller
{
    public function form()
    {
        $kitap =Urun::where('group_id','=','7')->get();
        return view('kitap.form', compact('kitap'));
    }
}
