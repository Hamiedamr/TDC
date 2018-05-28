<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Training;
use App\Trainer;
use App\Lecture;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$lectures = Lecture::orderBy('date', 'desc')->get();
		return view('lecture.index', compact('lectures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$trainings = Training::all();
		$trainers = Trainer::all();

		return view('lecture.create', compact('trainings', 'trainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$training = Training::find($request['training_id']);
		$lecture = Lecture::create([
		    'training_id' =>$request['training_id'],
			'trainer_id' => $request['trainer_id'],
			'date' => $request['date'],
			'hours' => $request['hours'],
			'online' => $request['online'],
			'file' => ''
		]);

		if ($request->hasFile('file'))
		{
			$file = $request['file'];
			$file_name = $lecture->id . '.' . $file->getClientOriginalExtension();
			$file->move('imgs/lectures/', $file_name);

			$lecture->update([
				'file' => 'imgs/lectures/' . $file_name
			]);
		}

		return redirect()->route('lecture.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$lecture = Lecture::find($id);

		return view('lecture.show', compact('lecture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$trainings = Training::all();
		$trainers = Trainer::all();
		$lecture = Lecture::find($id);

		return view('lecture.edit', compact('trainings', 'trainers', 'lecture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'training_id' => 'required|integer|min:1|exists:trainings,id',
			'trainer_id' => 'required|integer|min:1|exists:trainers,id',
			'date' => 'required|date',
			'hours' => 'required|integer|min:1',
			'online' => 'required|boolean',
			'file' => 'image|max:10240'
		]);

		$lecture = Lecture::find($id);

		if ($lecture)
		{
			$lecture->update([
				'training_id' => $request['training_id'],
				'trainer_id' => $request['trainer_id'],
				'date' => $request['date'],
				'hours' => $request['hours'],
				'online' => $request['online']
			]);

			if ($request->hasFile('file'))
			{
				File::delete($lecture['file']);

				$file = $request['file'];
				$file_name = $lecture->id . '.' . $file->getClientOriginalExtension();
				$file->move('imgs/lectures/', $file_name);

				$lecture->update([
					'file' => 'imgs/lectures/' . $file_name
				]);
			}

			return redirect()->route('lecture.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$lecture = Lecture::find($id);

		if ($lecture)
		{
			$lecture->delete();

			return redirect()->route('lecture.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
	}
}