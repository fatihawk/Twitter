<?php

use Illuminate\Database\Seeder;
use App\Ornek;

class OrnekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ornek::class, 20)->create();
    }
}
