<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Department::create([
			'college_id' => 1,
			'main_type_id' => 1,
			'nameA' => 'هندسة الحاسب',
			'nameE' => 'Computer Engineering'
		]);

		App\Department::create([
			'college_id' => 1,
			'main_type_id' => 1,
			'nameA' => 'هندسة الاتصالات',
			'nameE' => 'Communication Engineering'
		]);

		App\Department::create([
			'college_id' => 2,
			'main_type_id' => 2,
			'nameA' => 'بحار',
			'nameE' => 'Oceans Geography'
		]);

		App\Department::create([
			'college_id' => 2,
			'main_type_id' => 2,
			'nameA' => 'حيوان',
			'nameE' => 'Zoology'
		]);

		App\Department::create([
			'college_id' => 3,
			'main_type_id' => 3,
			'nameA' => 'هندسة الحاسب',
			'nameE' => 'Computer Engineering'
		]);

		App\Department::create([
			'college_id' => 3,
			'main_type_id' => 3,
			'nameA' => 'هندسة الاتصالات',
			'nameE' => 'Communication Engineering'
		]);

		App\Department::create([
			'college_id' => 4,
			'main_type_id' => 4,
			'nameA' => 'محاسبة',
			'nameE' => 'Accounting'
		]);

		App\Department::create([
			'college_id' => 5,
			'main_type_id' => 5,
			'nameA' => 'هندسة الحاسب',
			'nameE' => 'Computer Engineering'
		]);

		App\Department::create([
			'college_id' => 5,
			'main_type_id' => 5,
			'nameA' => 'هندسة الاتصالات',
			'nameE' => 'Communication Engineering'
		]);

		App\Department::create([
			'college_id' => 6,
			'main_type_id' => 6,
			'nameA' => 'عام',
			'nameE' => 'General'
		]);
    }
}