@extends('layouts.app')

@section('content')
    <h1>Grades</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Student</th>
                <th>Course</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $grade)
                <tr>
                    <td>{{ $grade->student->name }}</td>
                    <td>{{ $grade->course->name }}</td>
                    <td>{{ $grade->grade }}</td>
                    <td>
                        <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('grades.destroy', $grade->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('grades.create') }}" class="btn btn-success">Create New Grade</a>
@endsection