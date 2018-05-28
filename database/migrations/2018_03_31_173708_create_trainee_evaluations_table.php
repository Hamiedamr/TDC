<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineeEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_evaluations', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('trainee_id');
			$table->unsignedInteger('trainer_id');
			$table->unsignedInteger('training_id');
			$table->text('gain')->nullable();
			$table->text('comment')->nullable();
			$table->text('improvement')->nullable();
			$table->text('apply')->nullable();
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
        Schema::dropIfExists('trainee_evaluations');
    }
}