<?php

use Illuminate\Database\Seeder;

class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Trainer::create([
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
			'otherPrograms' => 'برنامج 1',
			'photo' => ''
		]);

		App\Trainer::create([
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
			'otherPrograms' => 'برنامج 2',
			'photo' => ''
		]);

		App\Trainer::find(1)->Course()->attach([1, 2]);
		App\Trainer::find(1)->Course()->attach([3, 4]);

		App\Trainer::find(2)->Course()->attach([1, 4]);
		App\Trainer::find(2)->Course()->attach([2, 3]);
    }
}