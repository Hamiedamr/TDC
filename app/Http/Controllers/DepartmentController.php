<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;
use App\College;
use App\Department;
use App\MainType;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		 $departments = Department::orderBy('nameA')->get();

		return view('department.index', compact('departments'));
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
    $colleges = College::all();

		return view('department.create', compact('colleges','universities', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


		$college = College::find($request['college_id']);
		$college->Department()->create([
			'main_type_id' => $request['main_type_id'],
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE']
		]);

		return redirect()->route('department.index')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$department = Department::find($id);

		return view('department.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$universities = University::all();
		$department = Department::find($id);
		$types = MainType::all();

		return view('department.edit', compact('universities', 'department', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

		$department = Department::find($id);

		if ($department)
		{
			$department->update([
				'college_id' => $request['college_id'],
				'main_type_id' => $request['main_type_id'],
				'nameA' => $request['nameA'],
				'nameE' => $request['nameE']
			]);

			return redirect()->route('department.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$department = Department::find($id);

		if ($department)
		{
			$department->delete();

			return redirect()->route('department.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
	}
}