<?php

use Illuminate\Database\Seeder;

class HallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\Hall::create([
			'name' => 'قاعة 1',
			'capacity' => 50,
			'description' => 'وصف 1'
		]);

		App\Hall::create([
			'name' => 'قاعة 2',
			'capacity' => 100,
			'description' => 'وصف 2'
		]);

		App\Hall::create([
			'name' => 'قاعة 3',
			'capacity' => 75,
			'description' => 'وصف 3'
		]);

		App\Hall::create([
			'name' => 'قاعة 4',
			'capacity' => 150,
			'description' => 'وصف 4'
		]);
    }
}