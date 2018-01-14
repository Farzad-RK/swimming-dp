<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->dateTime('regStartDate');
            $table->dateTime('regEndDate');
            $table->string('place');
            $table->string('capacity');
            $table->string('gender');
            $table->string('registrationCost');
            $table->timestamps();
        });
        Schema::table('matches', function($table) {
            $table->softDeletes();
            $table->integer('match_type_id')->unsigned();
            $table->foreign('match_type_id')->references('id')->on('match_types');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
