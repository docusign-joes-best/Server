<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StatusTbl', function (Blueprint $table) {
            // Primary key auto increment unsigned bigint
            $table->bigIncrements('statusID');
            $table->string('statusType');
            $table->string('statusColor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('StatusTbl');
    }
}
