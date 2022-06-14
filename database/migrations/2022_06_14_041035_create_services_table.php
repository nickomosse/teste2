<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('providerName');
            $table->string('providerPhone');
            $table->unsignedBigInteger('serviceType_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('direct');
            $table->timestamps();

            $table->foreign('serviceType_id')
                  ->references('id')
                  ->on('service_types');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
