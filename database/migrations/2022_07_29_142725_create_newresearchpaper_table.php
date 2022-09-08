<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewresearchpaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newresearchpaper', function (Blueprint $table) {
            $table->id('newresearchpaper_id');
            $table->string('professorsname',60);
            $table->string('topic',60);
            $table->string('institutionname',60);
            $table->string('headline',60);
            $table->string('publicationname',60);
            $table->string('contactprofessor',60);
            $table->string('viewpaper',60);
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
        Schema::dropIfExists('newresearchpaper');
    }
}
