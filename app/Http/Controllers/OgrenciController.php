<?php

namespace App\Http\Controllers;

use App\Dersler;
use App\Ogrenciler;
use App\Not;
use Illuminate\Http\Request;

class OgrenciController extends Controller
{
    public function obs()
    {
        $ogrenciler = Ogrenciler::first();
        $dersler = Dersler::get();
        return view('obs.show', compact('ogrenciler','dersler'));
    }
}
