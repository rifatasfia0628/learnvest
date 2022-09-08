<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newcourse', function (Blueprint $table) {
            $table->id('newcourse_id');
            $table->string('coursename',60);
            $table->string('topic',60);
            $table->string('institutionname',1000);
            $table->string('viewcourse',60);
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
        Schema::dropIfExists('newcourse');
    }
}
