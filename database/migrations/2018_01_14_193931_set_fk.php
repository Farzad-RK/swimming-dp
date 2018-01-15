<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SetFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
      Schema::table('users', function($table) {
          $table->integer('app_role_id')->nullable()->unsigned();
          $table->foreign('app_role_id')->references('id')->on('app_roles');
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
