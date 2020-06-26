<?php

use App\Odeme;
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
        $faker = Faker\Factory::create('tr_TR', 'Base', 'Internet','DateTime');
        $siparis = Siparis::get();
            foreach ($siparis as $musteri) {
                    Odeme::create(['siparis_id' => $musteri->id, 'odeme_tur'=>$musteri->Adres, 'Tutar' => $faker->dateTimeThisYear($max = 'now', $timezone = null),]);
            }
    }
}
