<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmbrellaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umbrella', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_id')->nullable();
            $table->string('request_account');
            $table->string('receive_account')->nullable();
            $table->Time('request_time');
            $table->Time('receive_time')->nullable();
            $table->Time('finish_time')->nullable();
            $table->integer('is_done')->nullable();
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
        Schema::dropIfExists('umbrella');
    }
}
