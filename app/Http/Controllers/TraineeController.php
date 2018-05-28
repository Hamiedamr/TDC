<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;
use App\College;
use App\Department;
use App\JobStatus;
use App\Nationality;
use App\Trainee;

class TraineeController extends Controller
{

    public function index()
    {
        $trainees = Trainee::all();
        return view('trainee.index', compact('trainees'));
    }


    public function create()
    {
        $universities = University::all();
        $statuses = JobStatus::all();
        $nationalities = Nationality::all();
        $colleges = College::all();
        $departments = Department::all();

        return view('trainee.create', compact('universities', 'statuses', 'nationalities', 'colleges', 'departments'));
    }


    public function store(Request $request)
    {
        $data = $request->except('university', 'college');
        Trainee::create($data);
        return redirect()->route('trainee.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }


    public function show($id)
    {
        $trainee = Trainee::find($id);
        return view('trainee.show', compact('trainee', 'universities', 'degrees'));
    }


    public function academic($id)
    {
        $universities = University::all();

        $nationalities = Nationality::all();
        $trainee = Trainee::find($id);
        $statuses1 = JobStatus::find($trainee->job_status_id);
        $statuses = JobStatus::where('statusOrder', '>', $statuses1->statusOrder)->get();
        $colleges = College::all();
        $departments = Department::all();
        return view('trainee.edit', compact('universities', 'statuses', 'nationalities', 'trainee', 'colleges', 'departments', 'statuses1'));
    }

    public function edit($id)
    {
        $universities = University::all();
        $statuses = JobStatus::all();
        $nationalities = Nationality::all();
        $trainee = Trainee::find($id);
        $statuses1 = JobStatus::find($trainee->job_status_id);
        $colleges = College::all();
        $departments = Department::all();
        return view('trainee.edit2', compact('universities', 'statuses', 'nationalities', 'trainee', 'colleges', 'departments', 'statuses1'));
    }

    public function update(Request $request, $id)
    {
        $trainee = Trainee::find($id);
        $data = $request->except('university', 'college');
        if ($trainee) {
            $trainee->update($data);
            return redirect()->route('trainee.index')->with('msg', '<div class="alert alert-success">Done...</div>');
        }
    }

    public function updates(Request $request, $id)
    {
        //return dd($request->all());
        //return $id;

        $this->validate($request, [
            'job_status_id' => 'required|integer|min:1|exists:job_statuses,id',

        ]);
        //return dd($request->all());
        $trainee = Trainee::find($id);

        if ($trainee) {
            $trainee->update([
                'job_status_id' => $request['job_status_id'],
            ]);

            return redirect()->route('trainee.index')->with('msg', '<div class="alert alert-success">Done...</div>');
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trainee $trainee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainee = Trainee::find($id);

        if ($trainee) {
            $trainee->delete();

            return redirect()->route('trainee.index')->with('msg', '<div class="alert alert-success">Done...</div>');
        }
    }
}