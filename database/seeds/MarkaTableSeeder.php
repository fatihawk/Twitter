<?php

use App\Marka;
use App\UrunGrup;
use Illuminate\Database\Seeder;

class MarkaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR','Base','Internet');
        $group = UrunGrup::get();
        foreach ($group as $groups) {
            for ($i = 0; $i < 10; $i++) {
                Marka::create(['group_id' => $groups->id, 'name' => $faker->company,]);
            }
        }
    }
}
