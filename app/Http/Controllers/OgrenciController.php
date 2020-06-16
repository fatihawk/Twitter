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
        $Matematik1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 1)->where('type', '=', 'vize')->get();
        $Matematik2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 1)->where('type', '=', 'final')->get();
        $Turkce1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 2)->where('type', '=', 'vize')->get();
        $Turkce2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 2)->where('type', '=', 'final')->get();
        $Fizik1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 3)->where('type', '=', 'vize')->get();
        $Fizik2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 3)->where('type', '=', 'final')->get();
        $Beden1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 4)->where('type', '=', 'vize')->get();
        $Beden2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 4)->where('type', '=', 'final')->get();
        $Resim1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 5)->where('type', '=', 'vize')->get();
        $Resim2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 5)->where('type', '=', 'final')->get();
        $Cografya1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 6)->where('type', '=', 'vize')->get();
        $Cografya2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 6)->where('type', '=', 'final')->get();
        $Geometri1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 7)->where('type', '=', 'vize')->get();
        $Geometri2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 7)->where('type', '=', 'final')->get();
        $Tarih1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 8)->where('type', '=', 'vize')->get();
        $Tarih2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 8)->where('type', '=', 'final')->get();
        $Sosyal1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 9)->where('type', '=', 'vize')->get();
        $Sosyal2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 9)->where('type', '=', 'final')->get();
        $Fen1 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 10)->where('type', '=', 'vize')->get();
        $Fen2 = Not::where('ogr_id', '=', 1)->where('ders_id', '=', 10)->where('type', '=', 'final')->get();
        return view('obs.show', compact('ogrenciler','dersler', 'Matematik1', 'Matematik2', 'Turkce1', 'Turkce2', 'Fizik1', 'Fizik2', 'Beden1', 'Beden2', 'Resim1', 'Resim2', 'Cografya1', 'Cografya2', 'Geometri1', 'Geometri2', 'Tarih1', 'Tarih2', 'Sosyal1', 'Sosyal2', 'Fen1', 'Fen2'));
    }
}
