<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hall;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$halls = Hall::orderBy('name')->get();

		return view('hall.index', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('hall.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		Hall::create([
			'name' => $request['name'],
			'capacity' => $request['capacity'],
			'description' => $request['description']
		]);

		return redirect()->route('hall.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$hall = Hall::find($id);

		return view('hall.show', compact('hall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$hall = Hall::find($id);

		return view('hall.edit', compact('hall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

		$hall = Hall::find($id);

		if ($hall)
		{
			$hall->update([
				'name' => $request['name'],
				'capacity' => $request['capacity'],
				'description' => $request['description']
			]);

			return redirect()->route('hall.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$hall = Hall::find($id);

		if ($hall)
		{
			$hall->delete();

			return redirect()->route('hall.index')->with('msg', '<div class="alert alert-success">Done...</div>');
		}
    }
}