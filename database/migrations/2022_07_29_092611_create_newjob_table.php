<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewjobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newjob', function (Blueprint $table) {
            $table->id('newjob_id');
            $table->string('companyname',60);
            $table->string('position',60);
            $table->string('requirments',60);
            $table->string('responsibilities',60);
            $table->string('experienceneeded',60);
            $table->string('salaryrange',60);
            $table->string('dropyourcv',60);
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
        Schema::dropIfExists('newjob');
    }
}
