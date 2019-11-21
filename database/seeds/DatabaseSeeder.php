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
        // $this->call(UsersTableSeeder::class);


       /* DB::table('users')->insert([
            "firstname" => Str::random(12),
            "lastname" => Str::random(12),
            "email" => Str::random('10').'@gmail.com',
            "password" => Hash::make("Benz231"),
            "type" => "Client",
        ]);*/

       /* DB::table('clients')->insert([
            "firstname" => Str::random(12),
            "lastname" => Str::random(12),
            "email" => Str::random('10').'@gmail.com',
            "password" => Hash::make("Benz231"),
        ]);*/

        DB::table('drivers')->insert([
            "firstname" => Str::random(12),
            "lastname" => Str::random(12),
            "email" => Str::random('10').'@gmail.com',
            "password" => Hash::make("Benz231"),
        ]);
    }
}
