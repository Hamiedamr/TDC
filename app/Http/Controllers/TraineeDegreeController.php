<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobStatus;
use App\Trainee;

class TraineeDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$trainees = Trainee::orderBy('nameA')->get();

		return view('degree.trainee.index', compact('trainees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$trainee = Trainee::find($id);

		return view('degree.trainee.show', compact('trainee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$statuses = JobStatus::all();
		$trainee = Trainee::find($id);

		return view('degree.trainee.edit', compact('statuses', 'trainee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'job_status_id' => 'required|integer|min:1|exists:job_statuses,id'
		]);

		$trainee = Trainee::find($id);

		if ($trainee)
		{
			$trainee->update([
				'job_status_id' => $request['job_status_id']
			]);

			return redirect()->route('trainee.degree.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		//
    }
}