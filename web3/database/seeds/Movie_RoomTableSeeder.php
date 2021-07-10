<?php

use Illuminate\Database\Seeder;

class Movie_RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_room')->insert([
            'movie_id' => '1',
            'room_id' => '1',
            'time' => '2019-06-09 09:30:00',
        ]);

        DB::table('movie_room')->insert([
            'movie_id' => '2',
            'room_id' => '2',
            'time' => '2019-06-09 16:00:00',
        ]);

        DB::table('movie_room')->insert([
            'movie_id' => '3',
            'room_id' => '3',
            'time' => '2019-06-09 20:30:00',
        ]);
    }
}
