<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobStatus;
use App\Trainer;

class TrainerDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$trainers = Trainer::orderBy('nameA')->get();

		return view('degree.trainer.index', compact('trainers'));
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
		$trainer = Trainer::find($id);

		return view('degree.trainer.show', compact('trainer'));
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
		$trainer = Trainer::find($id);

		return view('degree.trainer.edit', compact('statuses', 'trainer'));
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

		$trainer = Trainer::find($id);

		if ($trainer)
		{
			$trainer->update([
				'job_status_id' => $request['job_status_id']
			]);

			return redirect()->route('trainer.degree.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
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