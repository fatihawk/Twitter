<?php

use Illuminate\Database\Seeder;
use App\Not;
use App\Dersler;

class DerslerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('derslers')->insert([

            ['name' => 'Matematik'],
            ['name' => 'Turkce'],
            ['name' => 'Fizik'],
            ['name' => 'Beden'],
            ['name' => 'Resim'],
            ['name' => 'Cografya'],
            ['name' => 'Geometri'],
            ['name' => 'Tarih'],
            ['name' => 'Sosyal'],
            ['name' => 'Fen'],
        ]);
    }
}
