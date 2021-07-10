<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room')->insert([
            'nr_seats' => '20',
        ]);

        DB::table('room')->insert([
            'nr_seats' => '25',
        ]);

        DB::table('room')->insert([
            'nr_seats' => '30',
        ]);
    }
}
