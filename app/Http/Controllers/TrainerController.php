<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\University;
use App\College;
use App\Department;
use App\JobStatus;
use App\Course;
use App\Nationality;
use App\Trainer;

class TrainerController extends Controller
{

    public function index()
    {
		$trainers = Trainer::all();
		$departments  = Department::all();

		return view('trainer.trainerList', compact('trainers','departments'));
    }


    public function create()
    {
		$universities = University::all();
		$statuses = JobStatus::all();
		$courses = Course::all();
		$nationalities = Nationality::all();
		$colleges = College::all();
		$departments = Department::all();

		return view('trainer.trainerSignUp', compact('colleges','universities', 'statuses', 'nationalities', 'courses','departments'));
    }


    public function store(Request $request)
    {
		$trainer = Trainer::create([
			'department_id' => $request['department_id'],
			'job_status_id' => $request['job_status_id'],
			'nationality_id' => $request['nationality_id'],
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE'],
			'email' => $request['email'],
			'address' => $request['address'],
			'phone' => $request['phone'],
			'nationalId' => $request['nationalId'],
			'gender' => $request['gender'],
			'otherPrograms' => $request['otherPrograms'],
			'photo' => ''
		]);

		$trainer->Course()->attach($request['course_id']);

        if ($request->hasFile('photo'))
        {
            $file = $request['photo'];
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('imgs/trainers/', $file_name);

            $trainer->update([
                'photo' => $file_name,
            ]);
        }
		return redirect()->route('trainer.index')->with('message', 'Trainer Updated!');
    }


    public function show($id)
    {
		return view('trainer.show');
    }


    public function edit($id)
    {
		$statuses = JobStatus::all();
		$trainer = Trainer::find($id);

		return view('trainer.trainerAcademicDegreeUpdate', compact( 'statuses', 'trainer'));
    }


    public function update(Request $request, $id)
    {

		$trainer = Trainer::find($id);

		if ($trainer)
		{
			$trainer->update([
				
				'job_status_id' => $request['job_status_id'],
			]);

			$trainer->Course()->sync($request['course_ids']);

			if ($request->hasFile('photo'))
			{
				File::delete($trainer['photo']);

				$file = $request['photo'];
				$file_name = time() . '.' . $file->getClientOriginalExtension();
				$file->move('imgs/trainers/', $file_name);

                $trainer->update([
                    'photo' => $file_name,
                ]);
			}
			return redirect()->route('trainer.index')->with('message', 'Trainer Updated!');
		}
    }

	public function profile($id)
    {
		// return ($id);
		$trainer = Trainer::find($id);
		$nationalities = Nationality::all();
		$statuses = JobStatus::all();
		$department = Department::where('id','=',$trainer->department_id)->get();
		$college = College::where('id','=',$department[0]->college_id)->get();
		$university = University::where('id','=',$college[0]->university_id)->get();
		$courses = DB::table('trainer_course')->select('course_id')->where('trainer_id','=',$id)->get();
		//  return var_dump($courses);
		 $program = Course::where('id','=',$courses[0]->course_id)->get();
		return view('trainer.profile', compact('trainer','nationalities','statuses','college','university','department','program'));
    }
    public function destroy($id)
    {
		$trainer = Trainer::find($id);

		if ($trainer)
		{
			$trainer->delete();

			return redirect()->route('trainer.index')->with('error', 'Trainer Deleted!');
		}
    }
}