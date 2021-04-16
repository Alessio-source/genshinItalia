<?php

use Illuminate\Database\Seeder;
use App\Artefacts;

class ArtefactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artefacts = config('artefacts');

        foreach($artefacts as $artefact) {
            $db = new Artefacts();
            $db->fill($artefact);
            $db->save();
        }
    }
}
