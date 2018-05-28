<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $locale
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $locale)
    {
		$request->session()->put('locale', $locale);
		return redirect()->back();
    }
}