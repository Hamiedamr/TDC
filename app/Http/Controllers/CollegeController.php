<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;
use App\College;
use App\MainType;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$colleges = College::orderBy('nameA')->get();

		return view('college.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$universities = University::all();
		$types = MainType::all();

		return view('college.create', compact('universities', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$university = University::find($request['university_id']);
		$university->College()->create([
			'main_type_id' => $request['main_type_id'],
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE'],
			'type' => $request['type']
		]);

		return redirect()->route('university.college',$request['university_id'])->with('msg', 'College Created...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$college = College::find($id);

		return view('college.show', compact('college'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$universities = University::all();
		$college = College::find($id);
		$types = MainType::all();

		return view('college.edit', compact('universities', 'college', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

		$college = College::find($id);

		if ($college)
		{
			$college->update([
				'university_id' => $request['university_id'],
				'main_type_id' => $request['main_type_id'],
				'nameA' => $request['nameA'],
				'nameE' => $request['nameE'],
				'type' => $request['type']
			]);

			return redirect()->route('college.index')->with('msg', 'College Edited...');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$college = College::find($id);

		if ($college)
		{
			$college->delete();

			return redirect()->route('college.index')->with('msg', '<div class="alert alert-danger">College Deleted...</div>');
		}
	}

	public function department($id)
	{
		$college = College::find($id);

		if ($college)
		{
			$departments = $college->Department()->orderBy('nameA')->get();

			return view('department.index', compact('college', 'departments'));
		}
	}

	public function department_ajax(Request $request)
	{
		if ($request->has('id'))
		{
			$college = College::find($request['id']);

			if ($college)
			{
				$departments = $college->Department()->orderBy('nameA')->get();

				return response()->json($departments);
			}
		}
	}
}