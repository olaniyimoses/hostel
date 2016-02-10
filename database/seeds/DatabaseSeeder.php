<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Aboyowa',
            'lastname' => 'Iwele',
            'gender' => '2',
            'email' => 'aboyowa@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'firstname' => 'Olaniyi',
            'lastname' => 'Arawande',
            'gender' => '1',
            'email' => 'olaniyiarawande@gmail.com',
            'password' => bcrypt('passkey2012'),
            'is_admin' => false,
        ]);
    }
}
