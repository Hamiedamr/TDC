<?php

use Illuminate\Database\Seeder;

class TrainerEvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\TrainerEvaluation::create([
			'trainer_id' => 1,
			'trainee_id' => 1,
			'training_id' => 1,
			'hint' => 'ملاحظة'
		]);

		App\TrainerEvaluation::create([
			'trainer_id' => 1,
			'trainee_id' => 2,
			'training_id' => 2,
			'hint' => 'ملاحظة'
		]);

		App\TrainerEvaluation::create([
			'trainer_id' => 2,
			'trainee_id' => 1,
			'training_id' => 1,
			'hint' => 'ملاحظة'
		]);

		App\TrainerEvaluation::create([
			'trainer_id' => 2,
			'trainee_id' => 2,
			'training_id' => 2,
			'hint' => 'ملاحظة'
		]);

		$evaluation = App\TrainerEvaluation::find(1);
		$evaluation->EvaluationPoint()->attach(1, [
			'value_1' => 1,
			'value_2' => 2
		]);
		$evaluation->EvaluationPoint()->attach(2, [
			'value_1' => 2,
			'value_2' => 3
		]);

		$evaluation = App\TrainerEvaluation::find(2);
		$evaluation->EvaluationPoint()->attach(2, [
			'value_1' => 3,
			'value_2' => 1
		]);
		$evaluation->EvaluationPoint()->attach(3, [
			'value_1' => 1,
			'value_2' => 2
		]);

		$evaluation = App\TrainerEvaluation::find(3);
		$evaluation->EvaluationPoint()->attach(3, [
			'value_1' => 2,
			'value_2' => 3
		]);
		$evaluation->EvaluationPoint()->attach(1, [
			'value_1' => 3,
			'value_2' => 1
		]);

		$evaluation = App\TrainerEvaluation::find(4);
		$evaluation->EvaluationPoint()->attach(1, [
			'value_1' => 1,
			'value_2' => 2
		]);
		$evaluation->EvaluationPoint()->attach(2, [
			'value_1' => 2,
			'value_2' => 3
		]);
    }
}