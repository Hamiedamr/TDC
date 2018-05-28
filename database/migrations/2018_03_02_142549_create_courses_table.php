<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('program_id');
			$table->string('codeA');
			$table->string('codeE')->unique();
			$table->string('nameA');
			$table->string('nameE');
			$table->enum('programType', ['promotion', 'external']);
			$table->unsignedInteger('totalHours');
			$table->unsignedInteger('countToOpen');
			$table->unsignedInteger('freeCount');
			$table->boolean('mandatory');
			$table->enum('type', ['practical', 'theoretical']);
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
        Schema::dropIfExists('courses');
    }
}