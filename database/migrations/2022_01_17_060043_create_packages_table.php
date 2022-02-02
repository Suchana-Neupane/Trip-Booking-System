<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('details');
            $table->integer('price');
            $table->string('availability');
            $table->string('duration');
            $table->unsignedBigInteger('guides_id');
            $table->unsignedBigInteger('vehicles_id');
            $table->timestamps();

            $table->foreign('guides_id')->references('id')->on('guides')->onDelete('cascade');
            $table->foreign('vehicles_id')->references('id')->on('vehicles')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}