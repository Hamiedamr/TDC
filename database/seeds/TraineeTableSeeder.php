<?php

use Illuminate\Database\Seeder;

class TraineeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Trainee::create([
			'department_id' => 1,
			'job_status_id' => 1,
			'nationality_id' => 1,
			'nameA' => 'طارق إبراهيم',
			'nameE' => 'Tarek Ibrahem',
			'email' => 'tarek_mohammed2@yahoo.com',
			'address' => 'Miami, Alexandria',
			'phone' => '+2001112345678',
			'nationalId' => '12345678901234',
			'gender' => 'male',
			'agreement' => 1
		]);

		App\Trainee::create([
			'department_id' => 3,
			'job_status_id' => 2,
			'nationality_id' => 2,
			'nameA' => 'داوود',
			'nameE' => 'David',
			'email' => 'david@yahoo.com',
			'address' => 'California',
			'phone' => '+101112345678',
			'nationalId' => '12345678901234',
			'gender' => 'male',
			'agreement' => 0
		]);
    }
}