<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class AddForeignKeysToStocksTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('stocks', function (Blueprint $table) {                  
            $table->foreign('book_id', 'fk_stocks_books')->references('id')->on('books')->onUpdate('CASCADE')->onDelete('CASCADE');    
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stocks', function (Blueprint $table) {
            $table->dropForeign('fk_stocks_books');            

        });
    }

}
