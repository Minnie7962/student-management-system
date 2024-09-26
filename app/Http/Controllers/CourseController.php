<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->credits = $request->input('credits');
        $course->save();
        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->credits = $request->input('credits');
        $course->save();
        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
