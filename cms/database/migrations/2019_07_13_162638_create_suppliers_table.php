<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); 
            $table->string('supplier_name');
            $table->string('supplier_branch')->nullable();
            $table->string('supplier_email');
            $table->integer('supplier_tel');
            $table->integer('supplier_postcode');
            $table->string('supplier_address');
            $table->string('supplier_address2');
            $table->string('supplier_license');
            $table->string('supplier_rep');
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
        Schema::dropIfExists('suppliers');
    }
}
