<?php

use App\UrunGrup;
use Illuminate\Database\Seeder;

class UrunGrupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR','Base','Internet');
        
        for ($i = 0; $i < 10; $i++) {
            UrunGrup::create([ 
            'name' => $faker->company,
            ]);
        }
    }
}
