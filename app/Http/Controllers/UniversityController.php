<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$universities = University::orderBy('nameA')->get();

		return view('university.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('university.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		University::create([
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE'],
			'address' => $request['address']
		]);

		return redirect()->route('university.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$university = University::find($id);

		return view('university.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$university = University::find($id);

		return view('university.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

		$university = University::find($id);

		if ($university)
		{
			$university->update([
				'nameA' => $request['nameA'],
				'nameE' => $request['nameE'],
				'address' => $request['address']
			]);

			return redirect()->route('university.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\University  $university
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$university = University::find($id);

		if ($university)
		{
			$university->delete();

			return redirect()->route('university.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
	}

	public function college($id)
	{
		$university = University::find($id);

		if ($university)
		{
			$colleges = $university->College()->orderBy('nameA')->get();

			return view('college.index', compact('university', 'colleges'));
		}
	}

	public function college_ajax(Request $request)
	{
		//return view('welcome');
			//die("hello");
		if ($request->has('university'))
		{
			$university = University::find($request['university']);

			if ($university)
			{
				$colleges = $university->College()->orderBy('nameA')->get();

				return response()->json($colleges);
			}
		}
		       // $input = request()->all();

        //return response()->json(['success' => 'Got Simple Ajax Request.']);
	}
}