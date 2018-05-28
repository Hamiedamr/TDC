<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MainType;

class MainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$types = MainType::orderBy('nameA')->get();

		return view('maintype.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('maintype.create');
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

		MainType::create([
			'nameA' => $request['nameA'],
			'nameE' => $request['nameE']
		]);

		return redirect()->route('maintype_index')->with('alert-class', 'alert-success')->with('message', 'Done!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainType  $mainType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$type = MainType::find($id);

		return view('maintype.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainType  $mainType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$type = MainType::find($id);

		return view('maintype.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainType  $mainType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$this->validate($request, [
			'nameA' => 'required|between:3,255',
			'nameE' => 'required|between:3,255'
		]);

		$type = MainType::find($id);

		if ($type)
		{
			$type->update([
				'nameA' => $request['nameA'],
				'nameE' => $request['nameE']
			]);

			return redirect()->route('maintype_index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainType  $mainType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$type = MainType::find($id);

		if ($type)
		{
			$type->delete();

			return redirect()->route('maintype_index')->with('alert-class', 'alert-success')->with('message', 'Done!');
		}
	}
}