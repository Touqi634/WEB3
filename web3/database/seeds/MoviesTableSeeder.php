<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert([
            'name' => 'Avengers: Endgame',
            'description' => 'The Avengers assemble once more in order to undo what Thanos did and restore order to the universe.',
            'current' => '1',
            'picture' => '1558526992.jpg',
        ]);

        DB::table('movie')->insert([
            'name' => 'John Wick: Chapter 3 - Parabellum',
            'description' => 'John Wick is on the run after killing a member of the assassins guild.',
            'current' => '1',
            'picture' => '1558527067.jpg',
        ]);

        DB::table('movie')->insert([
            'name' => 'Aladdin',
            'description' => 'A kind-hearted street urchin and a power-hungry Grand Vizier vie for a magic lamp that has the power to make their deepest wishes come true.',
            'current' => '1',
            'picture' => '1559039648.jpg',
        ]);

        DB::table('movie')->insert([
            'name' => 'Star Wars: The Rise of Skywalker',
            'description' => 'The surviving Resistance faces the First Order once more in the final chapter of the Skywalker saga.',
            'current' => '0',
            'picture' => '1559042318.png',
        ]);
    }
}
