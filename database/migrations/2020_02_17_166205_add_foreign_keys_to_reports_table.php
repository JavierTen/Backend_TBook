<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class AddForeignKeysToReportsTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('reports', function (Blueprint $table) {                  
            $table->foreign('book_id', 'fk_reports_books')->references('id')->on('books')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('give_id', 'fk_reports_gives')->references('id')->on('gives')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('application_id', 'fk_reports_applications')->references('id')->on('applications')->onUpdate('CASCADE')->onDelete('CASCADE');   
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('fk_reports_books');            
            $table->dropForeign('fk_reports_gives');
            $table->dropForeign('fk_reports_applications');
        });
    }

}
