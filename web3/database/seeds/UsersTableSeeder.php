<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'imran ',
            'email' => 'imran@gmail.com',
            'password' => bcrypt('test1234'),
            'avatar' => '1559037089.jpg',
            'admin' => '1',
        ]);

        DB::table('users')->insert([
            'name' => 'ivan',
            'email' => 'ivan@gmail.com',
            'password' => bcrypt('test1234'),
            'admin' => '0',
        ]);
    }
}
