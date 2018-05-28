<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Program::create([
			'nameA' => 'مجموعة 1',
			'nameE' => 'Group 1'
		]);

		App\Program::create([
			'nameA' => 'مجموعة 2',
			'nameE' => 'Group 2'
		]);

		App\Program::create([
			'nameA' => 'مجموعة 3',
			'nameE' => 'Group 3'
		]);

		App\Program::create([
			'nameA' => 'مجموعة 4',
			'nameE' => 'Group 4'
		]);
    }
}