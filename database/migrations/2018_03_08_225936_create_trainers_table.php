<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('department_id');
			$table->unsignedInteger('job_status_id');
            $table->unsignedInteger('nationality_id');
			$table->string('nameA');
			$table->string('nameE');
			$table->string('email')->unique();
			$table->text('address');
			$table->string('phone', 14);
			$table->string('nationalId', 14);
			$table->enum('gender', ['male', 'female']);
			$table->text('otherPrograms');
			$table->string('photo');
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
        Schema::dropIfExists('trainers');
    }
}