<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->string('title', 127);
            $table->string('author', 127);
            $table->string('signature', 127);
            $table->string('inventarie', 127);
            $table->string('edition', 127);
            $table->string('barcode', 127);
            $table->text('description');
            $table->integer('categorie_id')->unsigned()->nullable()->index('fk_books_categories_idx');                 
            $table->integer('facultie_id')->unsigned()->nullable()->index('fk_books_faculties_idx');                 
            $table->integer('report_id')->unsigned()->nullable()->index('fk_books_reports_idx');     
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
        Schema::drop('books');
    }
}
