<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(OgrenciTableSeeder::class);
        $this->call(DerslerTableSeeder::class);
        $this->call(NotTableSeeder::class);
        $this->call(DevamTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdresTableSeeder::class);
        $this->call(SiparisTableSeeder::class);
        $this->call(UrunTableSeeder::class);
        $this->call(UrunGrupTableSeeder::class);
        $this->call(MarkaTableSeeder::class);
        $this->call(OdemeTableSeeder::class);
    }
}
