<?php

use App\Ogrenciler;
use Illuminate\Database\Seeder;

class OgrenciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR','Base','Internet');
        
        for ($i = 0; $i < 499; $i++) {
            Ogrenciler::create([ 
            'ad' => $faker->name,
            'e-mail'=>$faker->email,
            'sinif'=>$faker->randomDigitNotNull,
            'tc_no'=>$faker->tcNo
            ]);
        }
    }
}
