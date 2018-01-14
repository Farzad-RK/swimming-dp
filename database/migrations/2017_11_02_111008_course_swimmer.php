<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CourseSwimmer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('course_swimmer', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->timestamps();
      });
      Schema::table('course_swimmer', function($table) {
        $table->softDeletes();
        $table->integer('course_id')->unsigned();
        $table->integer('swimmer_id')->unsigned();
        $table->foreign('course_id')->references('id')->on('courses');
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
        //
    }
}
