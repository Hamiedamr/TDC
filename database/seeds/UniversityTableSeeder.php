<?php

use Illuminate\Database\Seeder;

class UniversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\University::create([
			'nameA' => 'جامعة الاسكندرية',
			'nameE' => 'Alexandria University',
			'address' => 'عنوان 1'
		]);

		App\University::create([
			'nameA' => 'جامعة عين شمس',
			'nameE' => 'Ain Shams University',
			'address' => 'عنوان 2'
		]);

		App\University::create([
			'nameA' => 'جامعة القاهرة',
			'nameE' => 'Cairo University',
			'address' => 'عنوان 3'
		]);
    }
}