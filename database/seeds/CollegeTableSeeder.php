<?php

use Illuminate\Database\Seeder;

class CollegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\College::create([
			'university_id' => 1,
			'main_type_id' => 1,
			'nameA' => 'كلية الهندسة',
			'nameE' => 'Faculty of Engineering',
			'type' => 'practical'
		]);

		App\College::create([
			'university_id' => 1,
			'main_type_id' => 1,
			'nameA' => 'كلية علوم',
			'nameE' => 'Faculty of Science',
			'type' => 'practical'
		]);

		App\College::create([
			'university_id' => 2,
			'main_type_id' => 2,
			'nameA' => 'كلية الهندسة',
			'nameE' => 'Faculty of Engineering',
			'type' => 'practical'
		]);

		App\College::create([
			'university_id' => 2,
			'main_type_id' => 2,
			'nameA' => 'كلية التجارة',
			'nameE' => 'Faculty of Commerce',
			'type' => 'theoretical'
		]);

		App\College::create([
			'university_id' => 3,
			'main_type_id' => 3,
			'nameA' => 'كلية الهندسة',
			'nameE' => 'Faculty of Engineering',
			'type' => 'practical'
		]);

		App\College::create([
			'university_id' => 3,
			'main_type_id' => 3,
			'nameA' => 'كلية الطب',
			'nameE' => 'Faculty of Medicine',
			'type' => 'practical'
		]);
    }
}