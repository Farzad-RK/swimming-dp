<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refrees', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('nationalNumber');
            $table->string('phoneNumber');
            $table->string('mobileNumber');
            $table->string('address');
            $table->string('gender');
            $table->string('fatherName');
            $table->timestamps();
        });
        Schema::table('refrees', function($table) {
            $table->softDeletes();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refrees');
    }
}
