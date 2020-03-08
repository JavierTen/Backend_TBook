<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class AddForeignKeysToFacultiesTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('faculties', function (Blueprint $table) {                  
            $table->foreign('schedule_id', 'fk_faculties_schedules')->references('id')->on('schedules')->onUpdate('CASCADE')->onDelete('CASCADE');  
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculties', function (Blueprint $table) {
            $table->dropForeign('fk_faculties_schedules');            
        });
    }

}
