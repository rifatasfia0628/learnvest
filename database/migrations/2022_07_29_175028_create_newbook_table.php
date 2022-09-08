<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewbookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newbook', function (Blueprint $table) {
            $table->id('newbook_id');
            $table->string('subjectname',60);
            $table->string('writersname',60);
            $table->string('bookname',60);
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
        Schema::dropIfExists('newbook');
    }
}
