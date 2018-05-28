<?php

use Illuminate\Database\Seeder;

class TraineeEvaluationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\TraineeEvaluation::create([
			'trainee_id' => 1,
			'trainer_id' => 1,
			'training_id' => 1,
			'gain' => 'اكتساب',
			'comment' => 'تعليق',
			'improvement' => 'تحسين',
			'apply' => 'تطبيق'
		]);

		App\TraineeEvaluation::create([
			'trainee_id' => 1,
			'trainer_id' => 2,
			'training_id' => 2,
			'gain' => 'اكتساب',
			'comment' => 'تعليق',
			'improvement' => 'تحسين',
			'apply' => 'تطبيق'
		]);

		App\TraineeEvaluation::create([
			'trainee_id' => 2,
			'trainer_id' => 1,
			'training_id' => 1,
			'gain' => 'اكتساب',
			'comment' => 'تعليق',
			'improvement' => 'تحسين',
			'apply' => 'تطبيق'
		]);

		App\TraineeEvaluation::create([
			'trainee_id' => 2,
			'trainer_id' => 2,
			'training_id' => 2,
			'gain' => 'اكتساب',
			'comment' => 'تعليق',
			'improvement' => 'تحسين',
			'apply' => 'تطبيق'
		]);

		$evaluation = App\TraineeEvaluation::find(1);
		$evaluation->EvaluationPoint()->attach(1, [
			'value_1' => 1,
			'value_2' => 2
		]);
		$evaluation->EvaluationPoint()->attach(2, [
			'value_1' => 2,
			'value_2' => 3
		]);

		$evaluation = App\TraineeEvaluation::find(2);
		$evaluation->EvaluationPoint()->attach(2, [
			'value_1' => 3,
			'value_2' => 1
		]);
		$evaluation->EvaluationPoint()->attach(3, [
			'value_1' => 1,
			'value_2' => 2
		]);

		$evaluation = App\TraineeEvaluation::find(3);
		$evaluation->EvaluationPoint()->attach(3, [
			'value_1' => 2,
			'value_2' => 3
		]);
		$evaluation->EvaluationPoint()->attach(1, [
			'value_1' => 3,
			'value_2' => 1
		]);

		$evaluation = App\TraineeEvaluation::find(4);
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