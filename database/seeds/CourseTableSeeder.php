<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Course::create([
			'codeA' => 'كود 1',
			'codeE' => 'ABC',
			'nameA' => 'كورس 1',
			'nameE' => 'Course 1',
			'program_id' => 1,
			'programType' => 'promotion',
			'totalHours' => 30,
			'countToOpen' => 20,
			'freeCount' => 10,
			'mandatory' => 1,
			'type' => 'practical',
			'file' => ''
		]);

		App\Course::create([
			'codeA' => 'كود 2',
			'codeE' => 'DEF',
			'nameA' => 'كورس 2',
			'nameE' => 'Course 2',
			'program_id' => 2,
			'programType' => 'external',
			'totalHours' => 40,
			'countToOpen' => 30,
			'freeCount' => 20,
			'mandatory' => 0,
			'type' => 'practical',
			'file' => ''
		]);

		App\Course::create([
			'codeA' => 'كود 3',
			'codeE' => 'GHI',
			'nameA' => 'كورس 3',
			'nameE' => 'Course 3',
			'program_id' => 3,
			'programType' => 'promotion',
			'totalHours' => 100,
			'countToOpen' => 35,
			'freeCount' => 22,
			'mandatory' => 1,
			'type' => 'theoretical',
			'file' => ''
		]);

		App\Course::create([
			'codeA' => 'كود 4',
			'codeE' => 'JKL',
			'nameA' => 'كورس 4',
			'nameE' => 'Course 4',
			'program_id' => 4,
			'programType' => 'external',
			'totalHours' => 60,
			'countToOpen' => 10,
			'freeCount' => 5,
			'mandatory' => 0,
			'type' => 'theoretical',
			'file' => ''
		]);

		App\Course::find(1)->JobStatus()->attach([1, 2]);
		App\Course::find(1)->MainType()->attach([5, 4]);

		App\Course::find(2)->JobStatus()->attach([2, 3]);
		App\Course::find(2)->MainType()->attach([4, 3]);

		App\Course::find(3)->JobStatus()->attach([3, 4]);
		App\Course::find(3)->MainType()->attach([3, 2]);

		App\Course::find(4)->JobStatus()->attach([4, 5]);
		App\Course::find(4)->MainType()->attach([2, 1]);
    }
}