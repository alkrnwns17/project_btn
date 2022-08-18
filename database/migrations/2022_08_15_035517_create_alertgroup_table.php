<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertgroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertgroup', function (Blueprint $table) {
            $table->bigIncrements('alertgroupid');
            $table->integer('alertid');
            $table->string('nodename', 50);
            $table->string('nodeipaddress', 50);
            $table->string('location', 25);
            $table->string('cpuload', 5);
            $table->string('memoryused', 5);
            $table->string('status', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alertgroup');
    }
}
