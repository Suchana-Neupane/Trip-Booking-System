<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('primarycontact');
            $table->string('secondarycontact');
            $table->unsignedBigInteger('guides_id');
            $table->unsignedBigInteger('vehicles_id');
            $table->unsignedBigInteger('packages_id');
            $table->timestamps();

            $table->foreign('guides_id')->references('id')->on('guides')->onDelete('cascade');
            $table->foreign('vehicles_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('packages_id')->references('id')->on('packages')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}