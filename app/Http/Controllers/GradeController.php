<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Exam;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['student', 'exam.course'])->get();
        return view('grades.index', compact('grades'));
    }

    public function create()
    {
        $students = Student::all();
        $exams = Exam::with('course')->get();
        return view('grades.create', compact('students', 'exams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'exam_id' => 'required|exists:exams,id',
            'grade' => 'required|numeric|min:0|max:100',
        ]);

        // Create the grade
        Grade::create([
            'student_id' => $request->student_id,
            'exam_id' => $request->exam_id,
            'grade' => $request->grade,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade added successfully!');
    }

    public function edit(Grade $grade)
    {
        $students = Student::all();
        $exams = Exam::with('course')->get();
        return view('grades.edit', compact('grade', 'students', 'exams'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'exam_id' => 'required|exists:exams,id',
            'grade' => 'required|numeric|min:0|max:100',
        ]);

        // Update the grade
        $grade->update([
            'student_id' => $request->student_id,
            'exam_id' => $request->exam_id,
            'grade' => $request->grade,
        ]);

        return redirect()->route('grades.index')->with('success', 'Grade updated successfully!');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect()->route('grades.index')->with('success', 'Grade deleted successfully!');
    }
}
