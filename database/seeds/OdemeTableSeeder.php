<?php

use App\Odeme;
use App\SiparisDetay;
use Illuminate\Database\Seeder;

class OdemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR', 'Base', 'Internet','DateTime','Payment');
        $siparis = SiparisDetay::get();
            foreach ($siparis as $musteri) {
                    Odeme::create(['siparis_id' => $musteri->siparis_id, 'odeme_tur'=>$faker->creditCardType, 'Tutar' => $musteri->miktar * $musteri->fiyat]);
            }
    }
}


