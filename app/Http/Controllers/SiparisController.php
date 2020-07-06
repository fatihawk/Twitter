<?php

namespace App\Http\Controllers;

use App\Urun;
use App\Siparis;
use App\User;
use App\Adres;
use Illuminate\Http\Request;

class SiparisController extends Controller
{
    public function form(Request $request)
    {
        $UrunGrup1 =Urun::where('group_id','=','1')->take(5)->get();
        $UrunGrup2 =Urun::where('group_id','=','2')->take(5)->get();
        $UrunGrup3 =Urun::where('group_id','=','3')->take(5)->get();
        $UrunGrup4 =Urun::where('group_id','=','4')->take(5)->get();
        $UrunGrup5 =Urun::where('group_id','=','5')->take(5)->get();
        $UrunGrup6 =Urun::where('group_id','=','6')->take(5)->get();
        $UrunGrup7 =Urun::where('group_id','=','7')->take(5)->get();
        $UrunGrup8 =Urun::where('group_id','=','8')->take(5)->get();
        $UrunGrup9 =Urun::where('group_id','=','9')->take(5)->get();
        $UrunGrup10 =Urun::where('group_id','=','10')->take(5)->get();
        $UrunGrup11 =Urun::where('group_id','=','11')->get();
        $query = Urun::query();
        if($request->sort)
         {
           $query = $query->orderBy('fiyat', $request->sort);
         }
        $query = $query->where('group_id','=','1')->take(5)->get();
        return view('siparis.form', compact('UrunGrup1','UrunGrup2','UrunGrup3','UrunGrup4','UrunGrup5','UrunGrup6','UrunGrup7','UrunGrup8','UrunGrup9','UrunGrup10','UrunGrup11','query'));
    }
    public function save(Request $request)
    {
        Siparis::create([
            'user_id' => auth()->user()->id,
            'order' => $request->order,
            'price' =>$request->price,
            'urun_id' => $request->urun_id,
            'marka_id' =>$request->marka_id,
        ]);
        return redirect()->route('siparis.show', [$request->order]);
    }
    public function show()
    {
        $siparis =Siparis::get();
        $user =User::get();
        $adres=Adres::get();
        return view('siparis.show', compact('siparis','user','adres'));
    }
}
