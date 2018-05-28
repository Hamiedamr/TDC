<?php

use Illuminate\Database\Seeder;

class EvaluationPointTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\EvaluationPoint::create([
			'title' => 'نقطة رقم 1',
			'type' => 'trainee',
			'displayOrder' => 1
		]);

		App\EvaluationPoint::create([
			'title' => 'نقطة رقم 2',
			'type' => 'trainee',
			'displayOrder' => 2
		]);

		App\EvaluationPoint::create([
			'title' => 'نقطة رقم 3',
			'type' => 'trainee',
			'displayOrder' => 3
		]);

		App\EvaluationPoint::create([
			'title' => 'نقطة رقم 4',
			'type' => 'trainer',
			'displayOrder' => 1
		]);

		App\EvaluationPoint::create([
			'title' => 'نقطة رقم 5',
			'type' => 'trainer',
			'displayOrder' => 2
		]);

		App\EvaluationPoint::create([
			'title' => 'نقطة رقم 6',
			'type' => 'trainer',
			'displayOrder' => 3
		]);
	}
}