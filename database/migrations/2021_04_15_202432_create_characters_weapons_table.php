<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersWeaponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_weapons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('characters_id');
            $table->unsignedBigInteger('weapons_id');
            $table->timestamps();

            $table->foreign('characters_id')
                  ->references('id')
                  ->on('characters')
                  ->onDelete('cascade');

            $table->foreign('weapons_id')
                  ->references('id')
                  ->on('weapons')
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
        Schema::dropIfExists('characters_weapons');
    }
}
