<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModificationHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ModificationHistoryTbl', function (Blueprint $table) {
            // Primary key auto increment unsigned bigint
            $table->bigIncrements('modificationID');
            $table->integer('userID');
            // foreign key
            $table->foreign('userID')->references('userID')->on('UserTbl')->onDelete('cascade');
            $table->string('comment');
            // Email should be unique
            $table->integer('statusID');
            // foreign key
            $table->foreign('statusID')->references('statusID')->on('StatusTbl')->onDelete('cascade');
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
        Schema::dropIfExists('ModificationHistoryTbl');
    }
}
