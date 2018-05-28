<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EvaluationPoint;
use App\TrainerEvaluation;

class TrainerEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$evaluations = TrainerEvaluation::all();

		return view('point.trainer.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$points = EvaluationPoint::where('type', 'trainer')->orderBy('displayOrder')->get();

		return view('point.trainer.create', compact('points'));
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
			'trainer_id' => 'required|integer|min:1|exists:trainers,id',
			'trainee_id' => 'required|integer|min:1|exists:trainees,id',
			'training_id' => 'required|integer|min:1|exists:trainings,id',
			'point_ids' => 'required|array',
			'point_ids.*' => 'integer|min:1|exists:evaluation_points,id',
			'value_1_ids' => 'required|array',
			'value_1_ids.*' => 'integer|min:1',
			'value_2_ids' => 'required|array',
			'value_2_ids.*' => 'integer|min:1',
			'hint' => 'between:10,65535'
		]);

		$evaluation = TrainerEvaluation::create([
			'trainer_id' => $request['trainer_id'],
			'trainee_id' => $request['trainee_id'],
			'training_id' => $request['training_id'],
			'hint' => $request['hint']
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

		return redirect()->route('point.trainer.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TrainerEvaluation  $trainerEvaluation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$evaluation = TrainerEvaluation::find($id);

		return view('point.trainer.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TrainerEvaluation  $trainerEvaluation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$points = EvaluationPoint::where('type', 'trainer')->orderBy('displayOrder')->get();
		$evaluation = TrainerEvaluation::find($id);

		return view('point.trainer.edit', compact('points', 'evaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TrainerEvaluation  $trainerEvaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'trainer_id' => 'required|integer|min:1|exists:trainers,id',
			'trainee_id' => 'required|integer|min:1|exists:trainees,id',
			'training_id' => 'required|integer|min:1|exists:trainings,id',
			'point_ids' => 'required|array',
			'point_ids.*' => 'integer|min:1|exists:evaluation_points,id',
			'value_1_ids' => 'required|array',
			'value_1_ids.*' => 'integer|min:1',
			'value_2_ids' => 'required|array',
			'value_2_ids.*' => 'integer|min:1',
			'hint' => 'between:10,65535'
		]);

		$evaluation = TrainerEvaluation::find($id);

		if ($evaluation)
		{
			$evaluation->update([
				'trainer_id' => $request['trainer_id'],
				'trainee_id' => $request['trainee_id'],
				'training_id' => $request['training_id'],
				'hint' => $request['hint']
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

			return redirect()->route('point.trainer.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TrainerEvaluation  $trainerEvaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$evaluation = TrainerEvaluation::find($id);

		if ($evaluation)
		{
			$evaluation->delete();

			return redirect()->route('point.trainer.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }
}