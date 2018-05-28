<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trainee;
use App\Lecture;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$lectures = Lecture::all();

		return view('attendance.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$trainees = Trainee::all();
		$lectures = Lecture::all();

		return view('attendance.create', compact('trainees', 'lectures'));
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
			'lecture_id' => 'required|integer|min:1|exists:lectures,id',
			'tIn' => 'required|date_format:H:i',
			'tOut' => 'required|date_format:H:i'
		]);

		$trainee = Trainee::find($request['trainee_id']);
		$trainee->Lecture()->attach($request['lecture_id'], [
			'tIn' => $request['tIn'],
			'tOut' => $request['tOut']
		]);

		return redirect()->route('attendance.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show($trainee, $lecture)
    {
		$trainee = Trainee::find($trainee);
		$lecture = Lecture::find($lecture);

		return view('attendance.show', compact('trainee', 'lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit($trainee, $lecture)
    {
		$trainee = Trainee::find($trainee);
		$lecture = Lecture::find($lecture);

		return view('attendance.edit', compact('trainee', 'lecture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'lecture_id' => 'required|integer|min:1|exists:lectures,id',
			'tIn' => 'required|date_format:H:i',
			'tOut' => 'required|date_format:H:i'
		]);

		$trainee = Trainee::find($id);

		if ($trainee)
		{
			$trainee->Lecture()->sync([$request['lecture_id'] => [
				'tIn' => $request['tIn'],
				'tOut' => $request['tOut']
			]]);

			return redirect()->route('attendance.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$this->validate($request, [
			'lecture_id' => 'required|integer|min:1|exists:lectures,id'
		]);

		$trainee = Trainee::find($id);

		if ($trainee)
		{
			$trainee->Lecture()->detach($request['lecture_id']);

			return redirect()->route('attendance.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }
}