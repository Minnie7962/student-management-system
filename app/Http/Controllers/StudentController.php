<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;
use App\Models\Report;
use App\Models\Course;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->input('name');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->gender = $request->input('gender');
        $student->contact_info = $request->input('contact_info');
        $student->enrollment_number = $request->input('enrollment_number');
        $student->save();
        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->gender = $request->input('gender');
        $student->contact_info = $request->input('contact_info');
        $student->enrollment_number = $request->input('enrollment_number');
        $student->save();
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }

    public function markAttendance(Request $request, Student $student)
    {
        $attendance = new Attendance();
        $attendance->student_id = $student->id;
        $attendance->attendance_date = now();
        $attendance->present = $request->input('present');
        $attendance->save();

        return redirect()->route('students.show', $student);
    }

    public function generateReport(Request $request, Student $student)
    {
        $report = new Report();
        $report->student_id = $student->id;
        $report->report_type = $request->input('report_type');
        $report->report_data = $request->input('report_data');
        $report->save();

        return redirect()->route('students.show', $student);
    }

    public function performance()
    {
        // Logic to get student performance data
        return view('students.performance');
    }
}
