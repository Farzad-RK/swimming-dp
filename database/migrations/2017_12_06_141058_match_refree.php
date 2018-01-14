<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchRefree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('match_refree', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('lineNumber'); 
          $table->timestamps();
     });

     Schema::table('match_refree', function($table) {
         $table->softDeletes();
         $table->integer('match_id')->unsigned();
         $table->integer('refree_id')->unsigned();
         $table->foreign('match_id')->references('id')->on('matches');
         $table->foreign('refree_id')->references('id')->on('refrees');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
