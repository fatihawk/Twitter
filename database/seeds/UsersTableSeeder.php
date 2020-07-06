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
        /*$user = User::create([
            'name' => 'ogretmen',
            'email' => 'ogretmen@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE'),
        ]);
        $user->roles()->attach(Role::where('slug', 'ogretmen')->first());

        $user1 = User::create([
            'name' => 'ogrenci',
            'email' => 'ogrenci@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE1'),
        ]);
        $user1->roles()->attach(Role::where('slug', 'ogrenci')->first());
        
        $user2 = User::create([
            'name' => 'ogrenci2',
            'email' => 'ogrenci2@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE12'),
        ]);
        $user2->roles()->attach(Role::where('slug', 'ogrenci2')->first());
        
        $user3 = User::create([
            'name' => 'ogrenci3',
            'email' => 'ogrenci3@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE13'),
        ]);
        $user3->roles()->attach(Role::where('slug', 'ogrenci3')->first());
        
        $user4 = User::create([
            'name' => 'ogrenci4',
            'email' => 'ogrenci4@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE14'),
        ]);
        $user1->roles()->attach(Role::where('slug', 'ogrenci4')->first());
        
        $user5 = User::create([
            'name' => 'ogrenci5',
            'email' => 'ogrenci5@gmail.com',
            'password' => Hash::make('jzpB9OU19o3PgE15'),
        ]);
        $user5->roles()->attach(Role::where('slug', 'ogrenci5')->first());
        $faker = Faker\Factory::create('tr_TR','Base','Internet');
        
        for ($i = 0; $i < 499; $i++) {
            User::create([ 
            'name' => $faker->name,
            'email'=>$faker->email,
            'password'=>$faker->password
            ]);
        }
        */

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@ondokuzon.com',
            'password' => Hash::make('oKHZda9xFlqVC4'),
        ]);
        $user->roles()->attach(Role::where('slug', 'admin')->first());

    }
}
