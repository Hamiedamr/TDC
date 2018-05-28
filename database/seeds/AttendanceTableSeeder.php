<?php

use Illuminate\Database\Seeder;

class AttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$trainee = App\Trainee::find(1);
		$trainee->Lecture()->attach(1, [
			'tIn' => \Carbon\Carbon::createFromTime(11, 0),
			'tOut' => \Carbon\Carbon::createFromTime(13, 0)
		]);
		$trainee->Lecture()->attach(2, [
			'tIn' => \Carbon\Carbon::createFromTime(14, 0),
			'tOut' => \Carbon\Carbon::createFromTime(16, 0)
		]);

		$trainee = App\Trainee::find(2);
		$trainee->Lecture()->attach(3, [
			'tIn' => \Carbon\Carbon::createFromTime(10, 0),
			'tOut' => \Carbon\Carbon::createFromTime(12, 0)
		]);
		$trainee->Lecture()->attach(4, [
			'tIn' => \Carbon\Carbon::createFromTime(9, 0),
			'tOut' => \Carbon\Carbon::createFromTime(11, 0)
		]);
    }
}