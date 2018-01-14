<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatchTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('match_team', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->timestamps();
      });

      Schema::table('match_team', function($table) {
        $table->softDeletes();
        $table->integer('match_id')->unsigned();
        $table->integer('team_id')->unsigned();
        $table->foreign('match_id')->references('id')->on('matches');
        $table->foreign('team_id')->references('id')->on('teams');

      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
