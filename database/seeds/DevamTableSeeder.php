<?php

use Illuminate\Database\Seeder;
use App\Devam;
use App\Dersler;
use App\Ogrenciler;

class DevamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ogrenciler = Ogrenciler::first();
        $dersler = Dersler::get();
        foreach ($ogrenciler as $ogrenci) {
            foreach ($dersler as $ders) {
                Devam::create(['ogr_id' => $ogrenci->id, 'ders_id' => $ders->id,'devamsizlik' => rand(1, 45)]);
            }
        }
    }
}
