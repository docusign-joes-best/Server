<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UserTbl', function (Blueprint $table) {
            // Primary key auto increment unsigned bigint
            $table->bigIncrements('userID');
            $table->string('firstName');
            $table->string('lastName');
            // Email should be unique
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isArcGisUser');
            $table->timestamp('dateCreated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UserTbl');
    }
}
