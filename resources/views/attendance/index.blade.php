@extends('layouts.app')

@section('content')
    <h1>Attendances</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Attended</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->student->name }}</td>
                    <td>{{ $attendance->course->name }}</td>
                    <td>{{ $attendance->attended ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('attendances.destroy', $attendance->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('attendances.create') }}" class="btn btn-success">Create New Attendance</a>
@endsection