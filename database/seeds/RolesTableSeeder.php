<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [   
                'name' => 'ogretmen',
                'slug' => 'ogretmen'
            ],
            [   
                'name' => 'ogrenci',
                'slug' => 'ogrenci'
            ],
            [   
                'name' => 'ogrenci2',
                'slug' => 'ogrenci2'
            ],
            [   
                'name' => 'ogrenci3',
                'slug' => 'ogrenci3'
            ],
            [   
                'name' => 'ogrenci4',
                'slug' => 'ogrenci4'
            ],
            [   
                'name' => 'ogrenci5',
                'slug' => 'ogrenci5'
            ],
            [   
                'name' => 'Admin',
                'slug' => 'admin'
            ],
        ]);
    }
}
