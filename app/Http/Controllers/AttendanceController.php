<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Staff;
use App\Models\Course;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('attendances.create', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $attendance = new Attendance();
        $attendance->student_id = $request->input('student_id');
        $attendance->course_id = $request->input('course_id');
        $attendance->attended = $request->input('attended');
        $attendance->save();
        return redirect()->route('attendances.index');
    }

    public function edit($id)
    {
        $attendance = Attendance::find($id);
        $students = Student::all();
        $courses = Course::all();
        return view('attendances.edit', compact('attendance', 'students', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);
        $attendance->student_id = $request->input('student_id');
        $attendance->course_id = $request->input('course_id');
        $attendance->attended = $request->input('attended');
        $attendance->save();
        return redirect()->route('attendances.index');
    }

    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();
        return redirect()->route('attendances.index');
    }
}
