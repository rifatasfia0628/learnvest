<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewassistanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newassistance', function (Blueprint $table) {
            $table->id('newassistance_id');
            $table->string('professorsname',60);
            $table->string('researchtopic',60);
            $table->string('researchboundaries',1000);
            $table->string('contactprofessor',60);
            $table->enum('career',["Android","Artificial Intelligence","Hardware","IOT","Web Development","Networking"]);
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
        Schema::dropIfExists('newassistance');
    }
}
