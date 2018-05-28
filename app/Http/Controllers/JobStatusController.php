<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobStatus;

class JobStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$statuses = JobStatus::orderBy('nameA')->get();

		return view('jobstatus.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('jobstatus.create');
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
			'nameA' => 'required|between:3,255',
			'nameE' => 'required|between:3,255',
			'courseFees' => 'required|integer|min:1',
			'statusOrder' => 'required|integer|min:1'
		]);

		JobStatus::create([
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE'],
			'courseFees' => $request['courseFees'],
			'statusOrder' => $request['statusOrder']
		]);

		return redirect()->route('jobstatus.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobStatus  $jobStatus
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$status = JobStatus::find($id);

		return view('jobstatus.show', compact('status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobStatus  $jobStatus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$status = JobStatus::find($id);

		return view('jobstatus.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobStatus  $jobStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'nameA' => 'required|between:3,255',
			'nameE' => 'required|between:3,255',
			'courseFees' => 'required|integer|min:1',
			'statusOrder' => 'required|integer|min:1'
		]);

		$status = JobStatus::find($id);

		if ($status)
		{
			$status->update([
				'nameA' => $request['nameA'],
				'nameE' => $request['nameE'],
				'courseFees' => $request['courseFees'],
				'statusOrder' => $request['statusOrder']
			]);

			return redirect()->route('jobstatus.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobStatus  $jobStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$status = JobStatus::find($id);

		if ($status)
		{
			$status->delete();

			return redirect()->route('jobstatus.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
	}
}