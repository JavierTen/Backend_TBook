<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGivesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('token')->unique()->required();   
            $table->integer('book_id')->unsigned()->nullable()->index('fk_gives_books_idx');              
            $table->integer('user_id')->unsigned()->nullable()->index('fk_gives_users_idx');              
            $table->integer('report_id')->unsigned()->nullable()->index('fk_gives_reports_idx');  
            $table->dateTime('created_at')->nullable();
            $table->dateTime('end_at')->nullable();
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
        Schema::drop('gives');
    }
}
