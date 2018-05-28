<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use App\Hall;
use App\Training;
use App\Trainer;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$trainings = Training::orderBy('startDate', 'desc')->get();
		return view('training.trainingList', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$courses = Course::all();
    $halls = Hall::all();
    $trainers = Trainer::all();

		return view('training.create', compact('courses', 'halls','trainers'));
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
			'course_id' => 'required|integer|min:1|exists:courses,id',
			'hall_id' => 'required|integer|min:1|exists:halls,id',
			'time' => 'required',
			'startDate' => 'required|date|before:endDate',
			'endDate' => 'required|date',
			'bookingStartDate' => 'required|date|before:bookingEndDate',
			'bookingEndDate' => 'required|date'
		]);

		$course = Course::find($request['course_id']);
		$course->Training()->create([
			'hall_id' => $request['hall_id'],
			'time' => $request['time'],
			'startDate' => $request['startDate'],
			'endDate' => $request['endDate'],
			'bookingStartDate' => $request['bookingStartDate'],
			'bookingEndDate' => $request['bookingEndDate']
		]);
		return redirect()->route('training.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$training = Training::find($id);

		return view('training.show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$courses = Course::all();
		$halls = Hall::all();
    $training = Training::find($id);
    $trainers = Trainer::all();

		return view('training.edit', compact('courses', 'halls', 'training','trainers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'course_id' => 'required|integer|min:1|exists:courses,id',
			'hall_id' => 'required|integer|min:1|exists:halls,id',
			'time' => 'required|date_format:H:i',
			'startDate' => 'required|date|before:endDate',
			'endDate' => 'required|date',
			'bookingStartDate' => 'required|date|before:bookingEndDate',
			'bookingEndDate' => 'required|date'
		]);

		$training = Training::find($id);

		if ($training)
		{
			$training->update([
				'course_id' => $request['course_id'],
				'hall_id' => $request['hall_id'],
				'time' => $request['time'],
				'startDate' => $request['startDate'],
				'endDate' => $request['endDate'],
				'bookingStartDate' => $request['bookingStartDate'],
				'bookingEndDate' => $request['bookingEndDate']
			]);

			return redirect()->route('training.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$training = Training::find($id);

		if ($training)
		{
			$training->delete();

			return redirect()->route('training.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
	}
}