<?php

use App\Siparis;
use App\Urun;
use App\SiparisDetay;
use Illuminate\Database\Seeder;

class SiparisDetayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR', 'Base', 'Internet','DateTime');
        $siparisler = Siparis::get();
            foreach ($siparisler as $siparis) {
                    $random=\App\Urun::all()->random();
                    SiparisDetay::create(['siparis_id' => $siparis->id, 'musteri_id'=>$siparis->musteri_id, 'urun_id' => $random->id ,'miktar' => rand(1, 5), 'fiyat' => $random->fiyat]);
            }
    }
}
