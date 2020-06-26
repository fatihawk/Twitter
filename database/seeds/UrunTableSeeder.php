<?php

use App\Marka;
use App\Urun;
use Illuminate\Database\Seeder;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('tr_TR', 'Base', 'Internet');
        $marka = Marka::get();
            foreach ($marka as $markas) {
                for ($i = 0; $i < 5; $i++) {
                    Urun::create(['marka_id' => $markas->id, 'group_id'=>$markas->group_id, 'name' => $faker->company, 'stok' => rand(1, 1000), 'fiyat' => rand(1, 500)]);
                }
            }
    }
}
