<?php

use Illuminate\Database\Seeder;
use App\Streammers;

class StreammersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $streammers = config('streammers');

        foreach ($streammers as $streammer) {
            $db = new Streammers;
            $db->fill($streammer);
            $db->save();
        }
    }
}
