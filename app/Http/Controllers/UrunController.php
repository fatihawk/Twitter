<?php

namespace App\Http\Controllers;

use App\Urun;
use Illuminate\Http\Request;

class UrunController extends Controller
{
    public function form()
    {
        $Urun=Urun::get();
        return view('urun.form', compact('Urun'));
    }
    public function save(Request $request)
    {
        Urun::create([
            'name' =>$request->name,
            'marka_id' => $request->marka_id,
            'group_id' => $request->group_id,
            'stok' => $request->stok,
            'fiyat' =>$request->fiyat,
        ]);
        return redirect()->route('siparis.form', [$request->name]);
    }
}
