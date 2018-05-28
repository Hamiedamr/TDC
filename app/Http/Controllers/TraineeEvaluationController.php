<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EvaluationPoint;
use App\TraineeEvaluation;

class TraineeEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$evaluations = TraineeEvaluation::all();

		return view('point.trainee.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$points = EvaluationPoint::where('type', 'trainee')->orderBy('displayOrder')->get();

		return view('point.trainee.create', compact('points'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$this->validate($request, [
			'trainee_id' => 'required|integer|min:1|exists:trainees,id',
			'trainer_id' => 'required|integer|min:1|exists:trainers,id',
			'training_id' => 'required|integer|min:1|exists:trainings,id',
			'point_ids' => 'required|array',
			'point_ids.*' => 'integer|min:1|exists:evaluation_points,id',
			'value_1_ids' => 'required|array',
			'value_1_ids.*' => 'integer|min:1',
			'value_2_ids' => 'required|array',
			'value_2_ids.*' => 'integer|min:1',
			'gain' => 'between:10,65535',
			'comment' => 'between:10,65535',
			'improvement' => 'between:10,65535',
			'apply' => 'between:10,65535'
		]);

		$evaluation = TraineeEvaluation::create([
			'trainee_id' => $request['trainee_id'],
			'trainer_id' => $request['trainer_id'],
			'training_id' => $request['training_id'],
			'gain' => $request['gain'],
			'comment' => $request['comment'],
			'improvement' => $request['improvement'],
			'apply' => $request['apply']
		]);

		$points = $request['point_ids'];
		$value_1 = $request['value_1_ids'];
		$value_2 = $request['value_2_ids'];

		for ($i = 0; $i < count($points); $i++)
		{
			$evaluation->EvaluationPoint()->attach($points[$i], [
				'value_1' => $value_1[$i],
				'value_2' => $value_2[$i]
			]);
		}

		return redirect()->route('point.trainee.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TraineeEvaluation  $traineeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$evaluation = TraineeEvaluation::find($id);

		return view('point.trainee.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TraineeEvaluation  $traineeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$points = EvaluationPoint::where('type', 'trainee')->orderBy('displayOrder')->get();
		$evaluation = TraineeEvaluation::find($id);

		return view('point.trainee.edit', compact('points', 'evaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TraineeEvaluation  $traineeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'trainee_id' => 'required|integer|min:1|exists:trainees,id',
			'trainer_id' => 'required|integer|min:1|exists:trainers,id',
			'training_id' => 'required|integer|min:1|exists:trainings,id',
			'point_ids' => 'required|array',
			'point_ids.*' => 'integer|min:1|exists:evaluation_points,id',
			'value_1_ids' => 'required|array',
			'value_1_ids.*' => 'integer|min:1',
			'value_2_ids' => 'required|array',
			'value_2_ids.*' => 'integer|min:1',
			'gain' => 'between:10,65535',
			'comment' => 'between:10,65535',
			'improvement' => 'between:10,65535',
			'apply' => 'between:10,65535'
		]);

		$evaluation = TraineeEvaluation::find($id);

		if ($evaluation)
		{
			$evaluation->update([
				'trainee_id' => $request['trainee_id'],
				'trainer_id' => $request['trainer_id'],
				'training_id' => $request['training_id'],
				'gain' => $request['gain'],
				'comment' => $request['comment'],
				'improvement' => $request['improvement'],
				'apply' => $request['apply']
			]);

			$points = $request['point_ids'];
			$value_1 = $request['value_1_ids'];
			$value_2 = $request['value_2_ids'];

			for ($i = 0; $i < count($points); $i++)
			{
				$evaluation->EvaluationPoint()->sync($points[$i], [
					'value_1' => $value_1[$i],
					'value_2' => $value_2[$i]
				]);
			}

			return redirect()->route('point.trainee.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TraineeEvaluation  $traineeEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$evaluation = TraineeEvaluation::find($id);

		if ($evaluation)
		{
			$evaluation->delete();

			return redirect()->route('point.trainee.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }
}