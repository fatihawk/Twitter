<?php

use App\Adres;
use App\Siparis;
use App\User;
use Illuminate\Database\Seeder;

class SiparisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('tr_TR', 'Base', 'Internet','DateTime');
        $musteriler = Adres::get();
            foreach ($musteriler as $musteri) {
                for ($i = 0; $i < 5; $i++) {
                    Siparis::create(['musteri_id' => $musteri->musteri_id, 'Fatura_adres'=>$musteri->Adres, 'Tarih' => $faker->dateTimeThisYear($max = 'now', $timezone = null),]);
                }
            }
        
    }
}
