<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Program;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$programs = Program::orderBy('nameA')->get();
		return view('program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		Program::create($request->all());
		return redirect()->route('program.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$program = Program::find($id);

		return view('program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$program = Program::find($id);
		$program->update($request->all());

        return redirect()->route('program.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$program = Program::find($id);

		if ($program)
		{
			$program->delete();

			return redirect()->route('program.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
	}

	public function course($id)
	{
		$program = Program::find($id);

		if ($program)
		{
			$courses = $program->Course()->orderBy('nameA')->get();

			return view('course.index', compact('program', 'courses'));
		}
	}
}