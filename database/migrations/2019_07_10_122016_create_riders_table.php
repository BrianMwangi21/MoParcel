<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone_number');
            $table->string('password');
            $table->string('id_number');
            $table->string('vehicle_reg');
            $table->string('vehicle_type');
            $table->string('main_location');
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
        Schema::dropIfExists('riders');
    }
}
