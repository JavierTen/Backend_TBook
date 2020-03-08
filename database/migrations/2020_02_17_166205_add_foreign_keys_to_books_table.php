<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class AddForeignKeysToBooksTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('books', function (Blueprint $table) {                  
            $table->foreign('categorie_id', 'fk_books_categories')->references('id')->on('books')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('facultie_id', 'fk_books_faculties')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE'); 
            $table->foreign('report_id', 'fk_books_reports')->references('id')->on('reports')->onUpdate('CASCADE')->onDelete('CASCADE');   
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('fk_books_books');            
            $table->dropForeign('fk_books_users');
            $table->dropForeign('fk_books_reports');
        });
    }

}
