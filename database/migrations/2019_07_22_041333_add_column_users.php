<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
         
         $table->unsignedBigInteger('profession_id')->nullable()->after('password');
         $table->foreign('profession_id')->references('id')->on('professions');


        });

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function(Blueprint $table){
         $table->dropForeign(['profession_id']);
         $table->dropColumn('profession_id');
        });
    }
}
