<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('price');
            $table->integer('room_number');
            $table->string('description');
            $table->integer('qty');
            $table->integer('discount');
            $table->integer('area');
            $table->string('view')->nullable();
            $table->unsignedBigInteger('hotel_id');
            $table->unsignedBigInteger('roomtype_id');
            $table->string('service')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('roomtype_id')->references('id')->on('room_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropForeign('rooms_hotel_id_foreign');
            $table->dropForeign('rooms_roomtype_id_foreign');
        });
        Schema::dropIfExists('rooms');
    }
}
