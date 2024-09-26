<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Course;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::with('course')->get();
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('exams.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'exam_name' => 'required',
            'exam_date' => 'required|date',
            'course_id' => 'required|exists:courses,id',
        ]);

        Exam::create($request->all());
        return redirect()->route('exams.index')->with('success', 'Exam created successfully');
    }

    public function edit($id)
    {
        $exam = Exam::findOrFail($id);
        $courses = Course::all();
        return view('exams.edit', compact('exam', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::findOrFail($id);

        $request->validate([
            'exam_name' => 'required',
            'exam_date' => 'required|date',
            'course_id' => 'required|exists:courses,id',
        ]);

        $exam->update($request->all());
        return redirect()->route('exams.index')->with('success', 'Exam updated successfully');
    }

    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();
        return redirect()->route('exams.index')->with('success', 'Exam deleted successfully');
    }
}
