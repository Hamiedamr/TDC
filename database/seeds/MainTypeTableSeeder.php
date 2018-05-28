<?php

use Illuminate\Database\Seeder;

class MainTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\MainType::create([
			'nameA' => 'نوع 1',
			'nameE' => 'Type 1'
		]);

		App\MainType::create([
			'nameA' => 'نوع 2',
			'nameE' => 'Type 2'
		]);

		App\MainType::create([
			'nameA' => 'نوع 3',
			'nameE' => 'Type 3'
		]);

		App\MainType::create([
			'nameA' => 'نوع 4',
			'nameE' => 'Type 4'
		]);

		App\MainType::create([
			'nameA' => 'نوع 5',
			'nameE' => 'Type 5'
		]);
    }
}