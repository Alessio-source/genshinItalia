<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersArtefactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artefacts_characters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('characters_id');
            $table->unsignedBigInteger('artefacts_id');
            $table->timestamps();

            $table->foreign('characters_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

            $table->foreign('artefacts_id')
                  ->references('id')
                  ->on('artefacts')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artefacts_characters');
    }
}
