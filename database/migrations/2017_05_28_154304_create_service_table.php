<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->increments('id');
            $table->string('request_account');
            $table->string('receive_account')->nullable();
            $table->string('trans_mode');
            $table->integer('trans_money');
            $table->string('start_name');
            $table->string('end_name');
            $table->float('start_lng');
            $table->float('start_lat');
            $table->float('end_lng');
            $table->float('end_lat');
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
        Schema::dropIfExists('service');
    }
}
