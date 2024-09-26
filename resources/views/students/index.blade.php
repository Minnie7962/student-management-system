@extends('layouts.app')

@section('content')
    <h1>Students</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Contact Information</th>
                <th>Enrollment Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->date_of_birth }}</td>
                    <td>{{ $student->gender }}</td>
                    <td>{{ $student->contact_info }}</td>
                    <td>{{ $student->enrollment_number }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('students.destroy', $student->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('students.create') }}" class="btn btn-success">Create New Student</a>
@endsection