<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('lineNumber');
            $table->string('swimmerPlace');
            $table->string('swimmerRecord');
            $table->timestamps();
        });

        Schema::table('results', function($table) {
            $table->softDeletes();
            $table->integer('match_id')->unsigned();
            $table->integer('swimmer_id')->unsigned();
            $table->integer('refree_id')->unsigned();
            $table->foreign('refree_id')->references('id')->on('refrees');
            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('swimmer_id')->references('id')->on('swimmers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
