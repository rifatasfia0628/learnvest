<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToNewresearchpaperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('newresearchpaper', function (Blueprint $table) {
           
 $table->string('status')->default('In progress')->after('career');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('newresearchpaper', function (Blueprint $table) {
            $table->dropColumn('status');
            
        });
    }
}
