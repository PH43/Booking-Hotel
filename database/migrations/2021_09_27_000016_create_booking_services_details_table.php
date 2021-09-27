<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingServicesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_services_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('qty');
            $table->string('price');
            $table->unsignedBigInteger('bookingroom_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('bookingroom_id')->references('id')->on('booking_rooms');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_services_details');
    }
}
