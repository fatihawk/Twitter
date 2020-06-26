<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ogretmen;

class OgrencilerController extends Controller
{
    public function show()
    {
        $ogrenci = Ogretmen::get();
        return view('ogrenci.show', compact('ogrenci'));
    }
}
