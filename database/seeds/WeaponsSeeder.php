<?php

use Illuminate\Database\Seeder;
use App\Weapons;

class WeaponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weapons = config('weapons');
        foreach ($weapons as $weapon) {
            $db = new Weapons();
            $db->fill($weapon);
            $db->save();
        }
    }
}
