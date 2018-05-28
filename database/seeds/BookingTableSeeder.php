<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$training = App\Training::find(1);
		$training->Trainee()->attach(1);
		$training->Trainee()->attach(2);

		$training = App\Training::find(2);
		$training->Trainee()->attach(1);
		$training->Trainee()->attach(2);
    }
}