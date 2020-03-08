<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->unique()->required();   
            $table->boolean('status')->default(0);      
            $table->integer('book_id')->unsigned()->nullable()->index('fk_reports_books_idx');        
            $table->integer('give_id')->unsigned()->nullable()->index('fk_reports_gives_idx');        
            $table->integer('application_id')->unsigned()->nullable()->index('fk_reports_applications_idx');  
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
        Schema::drop('reports');
    }
}
