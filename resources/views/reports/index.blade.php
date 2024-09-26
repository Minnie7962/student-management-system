@extends('layouts.app')

@section('content')
    <h1>Reports</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Attendance Report</th>
                <th>Grade Report</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>{{ $report->student->name }}</td>
                    <td>{{ $report->course->name }}</td>
                    <td>{{ $report->attendance_report }}</td>
                    <td>{{ $report->grade_report }}</td>
                    <td>
                        <a href="{{ route('reports.show', $report->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('reports.create') }}" class="btn btn-success">Create New Report</a>
@endsection