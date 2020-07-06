<?php

namespace App\Http\Controllers;

use App\Siparis;
use Illuminate\Http\Request;

class UrunlerimController extends Controller
{
    public function form()
    {
        $my_order = Siparis::get();
        return view('urunlerim.form', compact('my_order'));
    }
}
