<?php

use Illuminate\Database\Seeder;

class JobStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\JobStatus::create([
			'nameA' => 'حالة 1',
			'nameE' => 'Status 1',
			'courseFees' => 15,
			'statusOrder' => 1
		]);

		App\JobStatus::create([
			'nameA' => 'حالة 2',
			'nameE' => 'Status 2',
			'courseFees' => 20,
			'statusOrder' => 2
		]);

		App\JobStatus::create([
			'nameA' => 'حالة 3',
			'nameE' => 'Status 3',
			'courseFees' => 25,
			'statusOrder' => 3
		]);

		App\JobStatus::create([
			'nameA' => 'حالة 4',
			'nameE' => 'Status 4',
			'courseFees' => 30,
			'statusOrder' => 4
		]);

		App\JobStatus::create([
			'nameA' => 'حالة 5',
			'nameE' => 'Status 5',
			'courseFees' => 35,
			'statusOrder' => 5
		]);
    }
}