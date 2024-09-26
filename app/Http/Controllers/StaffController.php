<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Attendance;
use App\Models\Report;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:staff',
            'phone' => 'required',
            'department' => 'required',
            'role' => 'required',
        ]);

        Staff::create($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff member created successfully');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:staff,email,' . $staff->id,
            'phone' => 'required',
            'department' => 'required',
            'role' => 'required',
        ]);

        $staff->update($request->all());
        return redirect()->route('staff.index')->with('success', 'Staff member updated successfully');
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Staff member deleted successfully');
    }
    public function markAttendance(Request $request, Staff $staff)
    {
        $attendance = new Attendance();
        $attendance->staff_id = $staff->id;
        $attendance->attendance_date = now();
        $attendance->present = $request->input('present');
        $attendance->save();

        return redirect()->route('staff.show', $staff);
    }
    public function generateReport(Request $request, Staff $staff)
    {
        $report = new Report();
        $report->staff_id = $staff->id;
        $report->report_type = $request->input('report_type');
        $report->report_data = $request->input('report_data');
        $report->save();

        return redirect()->route('staff.show', $staff);
    }
}
