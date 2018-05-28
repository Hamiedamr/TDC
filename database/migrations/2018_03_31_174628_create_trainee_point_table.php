<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineePointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_point', function (Blueprint $table) {
			$table->unsignedInteger('trainee_evaluation_id');
			$table->unsignedInteger('evaluation_point_id');
			$table->unsignedInteger('value_1');
			$table->unsignedInteger('value_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainee_point');
    }
}