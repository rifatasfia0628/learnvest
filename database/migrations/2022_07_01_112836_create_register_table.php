<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('firstname',60);
            $table->string('lastname',60);
            $table->string('email',60);
            $table->string('password',60);
            $table->string('roll',60);
            $table->string('registration',60);
            $table->string('number',60);
            $table->enum('section',["A","B","C"]);
            $table->enum('semester',["1st","2nd","3rd","4th","5th","6th","7th","8th"]);
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
        Schema::dropIfExists('register');
    }
}
