<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ogretmen;

class OgretmenController extends Controller
{
    public function form()
    {
        $not = Ogretmen::get();
        return view('ogretmen.form', compact('not'));
    }
    public function save(Request $request)
    {

        Ogretmen::create([
            'not' => $request->not,
        ]);
        return redirect()->back()->with('success', 'not başarıyla oluşturulmuştur.');
    }
}