<?php

namespace App\Http\Controllers;

use App\Dersler;
use App\Ogrenciler;
use App\Devam;
use Illuminate\Http\Request;

class OgrenciController extends Controller
{
    public function obs()
    {
        $ogrenciler = Ogrenciler::paginate(1);
        $dersler = Dersler::get();
        $devamsizlik = Devam::get();
        return view('obs.show', compact('ogrenciler','dersler','devamsizlik'));
    }
}
