<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineeLectureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_lecture', function (Blueprint $table) {
			$table->unsignedInteger('trainee_id');
			$table->unsignedInteger('lecture_id');
			$table->time('tIn');
			$table->time('tOut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainee_lecture');
    }
}