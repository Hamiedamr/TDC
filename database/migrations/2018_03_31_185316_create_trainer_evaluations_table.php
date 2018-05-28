<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_evaluations', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('trainer_id');
			$table->unsignedInteger('trainee_id');
			$table->unsignedInteger('training_id');
			$table->text('hint')->nullable();
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
        Schema::dropIfExists('trainer_evaluations');
    }
}