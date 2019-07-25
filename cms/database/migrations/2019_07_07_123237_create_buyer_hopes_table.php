<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyerHopesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_hopes', function (Blueprint $table) {
            $table->increments('id');         //autoincrement,primaryKeyを自動生成
            $table->integer('user_id');       //autoincrement,primaryKeyを自動生成
            $table->string('hope_workstation');
            $table->integer('hope_comute');
            $table->integer('hope_budjet');
            $table->integer('hope_payment');
            $table->string('hope_madori');
            $table->integer('hope_width');
            $table->integer('hope_secondhand');
            $table->integer('hope_mansion');
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
        Schema::dropIfExists('buyer_hopes');
    }
}
