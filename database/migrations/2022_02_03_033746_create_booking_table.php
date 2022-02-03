<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guides_id');
            $table->unsignedBigInteger('vehicles_id');
            $table->unsignedBigInteger('packages_id');
            $table->unsignedBigInteger('visitors_id');
            $table->timestamps();


            $table->foreign('guides_id')->references('id')->on('guides')->onDelete('cascade');
            $table->foreign('vehicles_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('packages_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('visitors_id')->references('id')->on('visitors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
