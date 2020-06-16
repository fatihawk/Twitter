<?php

use Illuminate\Database\Seeder;
use App\Not;
use App\Dersler;
use App\Ogrenciler;

class NotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('Base');
        $ogrenciler = Ogrenciler::get();
        $dersler = Dersler::get();
        foreach ($ogrenciler as $ogrenci) {
            foreach ($dersler as $ders) {
                Not::create(['ogr_id' => $ogrenci->id, 'type' => 'vize', 'ders_id' => $ders->id, 'not' => rand(1, 100)]);
                Not::create(['ogr_id' => $ogrenci->id, 'type' => 'final', 'ders_id' => $ders->id, 'not' => rand(1, 100)]);
            }
        }
    }
}
