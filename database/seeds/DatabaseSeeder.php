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
        $this->call(WeaponsSeeder::class);
        $this->call(ArtefactsSeeder::class);
        $this->call(StreammersSeeder::class);
    }
}
