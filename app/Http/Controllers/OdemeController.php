<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Odeme;

class OdemeController extends Controller
{
    public function save(Request $request)
    {
        Odeme::create([
            'user_id'=>auth()->user()->id,
            'cardNo' =>$request->cardNo,
        ]);
        return redirect()->route('siparis.form', [$request->cardNo]);
    }
}
