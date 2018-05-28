<?php

use Illuminate\Database\Seeder;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Training::create([
			'course_id' => 1,
			'hall_id' => 1,
			'time' => \Carbon\Carbon::createFromTime(11, 0),
			'startDate' => \Carbon\Carbon::createFromDate(2018, 3, 3),
			'endDate' => \Carbon\Carbon::createFromDate(2018, 3, 9),
			'bookingStartDate' => \Carbon\Carbon::createFromDate(2018, 2, 27),
			'bookingEndDate' => \Carbon\Carbon::createFromDate(2018, 3, 2)
		]);

		App\Training::create([
			'course_id' => 2,
			'hall_id' => 2,
			'time' => \Carbon\Carbon::createFromTime(14, 0),
			'startDate' => \Carbon\Carbon::createFromDate(2018, 3, 10),
			'endDate' => \Carbon\Carbon::createFromDate(2018, 3, 16),
			'bookingStartDate' => \Carbon\Carbon::createFromDate(2018, 3, 6),
			'bookingEndDate' => \Carbon\Carbon::createFromDate(2018, 3, 9)
		]);

		App\Training::create([
			'course_id' => 3,
			'hall_id' => 3,
			'time' => \Carbon\Carbon::createFromTime(11, 0),
			'startDate' => \Carbon\Carbon::createFromDate(2018, 3, 3),
			'endDate' => \Carbon\Carbon::createFromDate(2018, 3, 9),
			'bookingStartDate' => \Carbon\Carbon::createFromDate(2018, 2, 27),
			'bookingEndDate' => \Carbon\Carbon::createFromDate(2018, 3, 2)
		]);

		App\Training::create([
			'course_id' => 4,
			'hall_id' => 4,
			'time' => \Carbon\Carbon::createFromTime(14, 0),
			'startDate' => \Carbon\Carbon::createFromDate(2018, 3, 10),
			'endDate' => \Carbon\Carbon::createFromDate(2018, 3, 16),
			'bookingStartDate' => \Carbon\Carbon::createFromDate(2018, 3, 6),
			'bookingEndDate' => \Carbon\Carbon::createFromDate(2018, 3, 9)
		]);
    }
}