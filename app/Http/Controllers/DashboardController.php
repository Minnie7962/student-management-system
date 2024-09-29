<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Project;
use App\Models\Staff;

class DashboardController extends Controller
{
    public function index()
    {
        $studentCount = Student::count();
        $courseCount = Course::count();
        $staffCount = Staff::count();
        $projects = Project::all();

        return view('dashboard', compact('students', 'courses', 'staff', 'projects'));
    }
}