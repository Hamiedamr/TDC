<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('course_id');
			$table->unsignedInteger('hall_id');
			$table->string('time');
			$table->date('startDate');
			$table->date('endDate');
			$table->date('bookingStartDate');
			$table->date('bookingEndDate');
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
        Schema::dropIfExists('trainings');
    }
}