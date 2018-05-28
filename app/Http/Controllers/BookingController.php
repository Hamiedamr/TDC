<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trainee;
use App\Training;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$trainings = Training::orderBy('startDate', 'desc')->get();

		return view('booking.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$trainings = Training::all();
		$trainees = Trainee::all();

		for ($i = 0; $i < count($trainings); $i++)
		{
			$trainings[$i]['available'] = $trainings[$i]->Course['countToOpen'] - $trainings[$i]->Trainee->count();
		}

		return view('booking.create', compact('trainings', 'trainees'));
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
			'training_ids' => 'required|array',
			'training_ids.*' => 'integer|min:1|exists:trainings,id',
			'trainee_id' => 'required|integer|min:1|exists:trainees,id'
		]);

		$trainings = Training::whereIn('id', $request['training_ids'])->get();
		$trainee = Trainee::find($request['trainee_id']);
		$messages = [];

		for ($i = 0; $i < count($trainings); $i++)
		{
			$exist = false;

			for ($j = i + 1; $j < count($trainings); $j++)
			{
				$lecture_exist = false;
				$lectures_1 = $trainings[$i]->Lecture;
				$lectures_2 = $trainings[$j]->Lecture;
				
				foreach ($lectures_1 as $lecture)
				{
					if ($lectures_2->where('date', $lecture['data']->count() != 0))
					{
						$lecture_exist = true;
						break;
					}
				}

				if ($lecture_exist)
				{
					$messages[$i] = '"' . $trainings[$i]->Course['nameA'] . '"' . 'has conflict with other courses.';
					$exist = true;
					break;
				}
			}

			if (!$exist)
			{
				$trainings[$i]->Trainee()->attach($trainee['id']);
			}
		}

		if (count($messages) > 0)
		{
			return redirect()->back()->with($messages);
		}
		else
		{
			return redirect()->route('booking.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		//
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
		//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$this->validate($request, [
			'trainee_id' => 'required|integer|min:1|exists:trainees,id'
		]);

		$training = Training::find($id);

		if ($training)
		{
			$training->Trainee()->detach($request['trainee_id']);

			return redirect()->route('booking.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }
}