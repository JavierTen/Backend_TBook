<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class AddForeignKeysToGivesTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('gives', function (Blueprint $table) {                  
            $table->foreign('book_id', 'fk_gives_books')->references('id')->on('books')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('user_id', 'fk_gives_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('report_id', 'fk_gives_reports')->references('id')->on('reports')->onUpdate('CASCADE')->onDelete('CASCADE');   
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gives', function (Blueprint $table) {
            $table->dropForeign('fk_gives_books');            
            $table->dropForeign('fk_gives_users');
            $table->dropForeign('fk_gives_reports');
        });
    }

}
