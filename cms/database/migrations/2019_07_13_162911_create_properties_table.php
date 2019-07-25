<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); 
            $table->string('property_name'); 
            $table->string('property_station1');
            $table->string('property_station2')->nullable();
            $table->string('property_station3')->nullable();
            $table->integer('property_walk1');
            $table->integer('property_walk2')->nullable();
            $table->integer('property_walk3')->nullable();
            $table->integer('property_plice');
            $table->string('property_madori');
            $table->integer('property_width');
            $table->integer('property_postcode');
            $table->string('property_address');
            $table->string('property_address2');
            $table->date('property_start');
            $table->date('property_build');
            $table->string('property_number');
            $table->integer('property_secondhand');
            $table->integer('property_mansion');
            $table->string('property_comment')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
