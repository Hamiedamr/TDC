<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerPointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_point', function (Blueprint $table) {
			$table->unsignedInteger('trainer_evaluation_id');
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
        Schema::dropIfExists('trainer_point');
    }
}