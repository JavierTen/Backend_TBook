<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->unique()->required();   
            $table->boolean('status')->default('1');
            $table->double('price', 8, 2)->default(0);
            $table->string('description', 255);
            $table->integer('give_id')->unsigned()->nullable()->index('fk_payments_gives_idx');    
            $table->integer('penaltie_id')->unsigned()->nullable()->index('fk_payments_penalties_idx');    
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('payments');
    }
}
