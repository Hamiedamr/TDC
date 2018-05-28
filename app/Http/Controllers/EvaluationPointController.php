<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EvaluationPoint;

class EvaluationPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$points = EvaluationPoint::orderBy('type')->orderBy('displayOrder')->get();

		return view('point.index', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('point.create');
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
			'title' => 'required|between:3,255',
			'type' => 'required|in:trainee,trainer',
			'displayOrder' => 'required|integer|min:1'
		]);

		EvaluationPoint::create([
			'title' => $request['title'],
			'type' => $request['type'],
			'displayOrder' => $request['displayOrder']
		]);

		return redirect()->route('point.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EvaluationPoint  $evaluationPoint
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$point = EvaluationPoint::find($id);

		return view('point.show', compact('point'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EvaluationPoint  $evaluationPoint
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$point = EvaluationPoint::find($id);

		return view('point.edit', compact('point'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EvaluationPoint  $evaluationPoint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'title' => 'required|between:3,255',
			'type' => 'required|in:trainee,trainer',
			'displayOrder' => 'required|integer|min:1'
		]);

		$point = EvaluationPoint::find($id);

		if ($point)
		{
			$point->update([
				'title' => $request['title'],
				'type' => $request['type'],
				'displayOrder' => $request['displayOrder']
			]);

			return redirect()->route('point.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EvaluationPoint  $evaluationPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$point = EvaluationPoint::find($id);

		if ($point)
		{
			$point->delete();

			return redirect()->route('point.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
	}
}