<?php

use Illuminate\Database\Seeder;

class LectureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Lecture::create([
			'training_id' => 1,
			'trainer_id' => 1,
			'date' => \Carbon\Carbon::createFromDate(2018, 3, 4),
			'hours' => 2,
			'online' => 1,
			'file' => ''
		]);

		App\Lecture::create([
			'training_id' => 1,
			'trainer_id' => 2,
			'date' => \Carbon\Carbon::createFromDate(2018, 3, 5),
			'hours' => 3,
			'online' => 0,
			'file' => ''
		]);

		App\Lecture::create([
			'training_id' => 2,
			'trainer_id' => 3,
			'date' => \Carbon\Carbon::createFromDate(2018, 3, 15),
			'hours' => 2,
			'online' => 1,
			'file' => ''
		]);

		App\Lecture::create([
			'training_id' => 3,
			'trainer_id' => 4,
			'date' => \Carbon\Carbon::createFromDate(2018, 3, 7),
			'hours' => 3,
			'online' => 0,
			'file' => ''
		]);
    }
}