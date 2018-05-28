<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nationality;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$nationalities = Nationality::orderBy('nameA')->get();

		return view('nationality.index', compact('nationalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('nationality.create');
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
			'nameE' => 'required|between:3,255'
		]);

		Nationality::create([
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE']
		]);

		return redirect()->route('nationality.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$nationality = Nationality::find($id);

		return view('nationality.show', compact('nationality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$nationality = Nationality::find($id);

		return view('nationality.edit', compact('nationality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'nameA' => 'required|between:3,255',
			'nameE' => 'required|between:3,255'
		]);

		$nationality = Nationality::find($id);

		if ($nationality)
		{
			$nationality->update([
				'nameA' => $request['nameA'],
				'nameE' => $request['nameE']
			]);

			return redirect()->route('nationality.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationality $nationality)
    {
		$nationality = Nationality::find($id);

		if ($nationality)
		{
			$nationality->delete();

			return redirect()->route('nationality.index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }
}