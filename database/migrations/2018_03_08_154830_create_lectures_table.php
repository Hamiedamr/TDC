<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('training_id');
			$table->unsignedInteger('trainer_id');
			$table->date('date');
			$table->unsignedInteger('hours');
			$table->boolean('online')->default(0);
			$table->string('file');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}