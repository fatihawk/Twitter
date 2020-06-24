<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'ogretmen',
            'email' => 'ogretmen@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE'),
        ]);
        $user->roles()->attach(Role::where('slug', 'ogretmen')->first());

        $user = User::create([
            'name' => 'ogrenci',
            'email' => 'ogrenci@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE1'),
        ]);
        $user->roles()->attach(Role::where('slug', 'ogrenci')->first());
    }
}
