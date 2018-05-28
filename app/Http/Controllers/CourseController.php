<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Program;
use App\JobStatus;
use App\MainType;
use App\Course;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::orderBy('nameA')->get();
        return view('course.index', compact('courses'));
    }


    public function create()
    {
        $programs = Program::all();
    $statuses = JobStatus::all();
        $types = MainType::all();
        return view('course.create', compact('programs', 'statuses', 'types'));
    }


    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request['file'];
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('imgs/trainers/', $file_name);
        }
        $data = $request->except('_token', 'main_type_ids');
        $data['file'] = $file_name;

        Course::create($data);
        return redirect()->route('course.index')->with('msg', '<div class="alert alert-success">Done...</div>');
    }


    public function show($id)
    {
        $course = Course::find($id);

        return view('course.show', compact('course'));
    }


    public function edit($id)
    {
        $programs = Program::all();
        $course = Course::find($id);
        $statuses = JobStatus::all();
        $types = MainType::all();

        return view('course.edit', compact('programs', 'course', 'statuses', 'types'));
    }


    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $data = $request->except('_token', 'main_type_ids');
        if ($request->hasFile('file')) {
            $file = $request['file'];
            $file_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('imgs/trainers/', $file_name);
            $data['file'] = $file_name;
        }
        $course->update($data);
        return redirect()->route('course.index')->with('msg', '<div class="alert alert-success">Done...</div>');

    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->delete();
            return redirect()->route('course.index')->with('msg', '<div class="alert alert-success">Done...</div>');
        }
    }
}