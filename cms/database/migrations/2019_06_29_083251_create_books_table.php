<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');       //autoincrement,primaryKeyを自動生成
            $table->integer('user_id');       //autoincrement,primaryKeyを自動生成
            $table->string('buyer_name');
            $table->integer('buyer_age');
            $table->string('buyer_email');
            $table->integer('buyer_postcode');
            $table->string('buyer_address');
            $table->string('buyer_address2');
            $table->timestamps();           //created_at,updated_atを自動生成
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
