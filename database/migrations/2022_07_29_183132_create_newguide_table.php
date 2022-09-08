<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewguideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newguide', function (Blueprint $table) {
            $table->id('newguide_id');
            $table->string('professorsname',60);
            $table->enum('section',["A","B","C"]);
            $table->enum('semester',["1st","2nd","3rd","4th","5th","6th","7th","8th"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newguide');
    }
}
