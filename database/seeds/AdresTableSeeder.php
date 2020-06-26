<?php

use App\Adres;
use App\User;
use Illuminate\Database\Seeder;

class AdresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR','Base','Internet');

        $musteriler = User::get();
        foreach ($musteriler as $musteri) {
                Adres::create(['musteri_id' => $musteri->id, 'Ad' => $musteri->name, 'Adres' => $faker->address]);
        }
        
    }
}
