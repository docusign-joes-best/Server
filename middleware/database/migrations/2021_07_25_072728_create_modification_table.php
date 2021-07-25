<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ModificationTbl', function (Blueprint $table) {
            // Primary key auto increment unsigned bigint
            $table->bigIncrements('modificationID');
            $table->integer('statusID');
            // foreign key
            $table->foreign('statusID')->references('statusID')->on('StatusTbl')->onDelete('cascade');               
            $table->json('vectorPolygon');
            $table->integer('proposerUserID');
            $table->foreign('proposerUserID')->references('userID')->on('UserTbl')->onDelete('cascade');
            $table->timestamp('dateProposed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ModificationTbl');
    }
}
