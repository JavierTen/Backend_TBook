<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class AddForeignKeysToPaymentsTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('payments', function (Blueprint $table) {                  
            $table->foreign('give_id', 'fk_payments_gives')->references('id')->on('gives')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('penaltie_id', 'fk_payments_penalties')->references('id')->on('penalties')->onUpdate('CASCADE')->onDelete('CASCADE');  
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('fk_payments_gives');            
            $table->dropForeign('fk_payments_penalties');
        });
    }

}
