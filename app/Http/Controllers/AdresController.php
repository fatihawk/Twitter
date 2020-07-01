<?php

namespace App\Http\Controllers;

use App\Adres;
use App\User;
use Illuminate\Http\Request;

class AdresController extends Controller
{
    public function form()
    {
        $musteri = User::where('id',auth()->user()->id)->get();
        $adres = Adres::where('id',auth()->user()->id)->get();
        return view('musteri.form', compact('musteri','adres'));
    }
    public function save(Request $request)
    {

        Adres::create([
            'musteri_id' => auth()->user()->id,
            'Ad' => auth()->user()->name,
            'Adres' => $request->Adres,
        ]);
        return redirect()->back()->with('success', 'adres başarıyla oluşturulmuştur.');
    }
}
