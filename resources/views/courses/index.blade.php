@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Credits</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->credits }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('courses.destroy', $course->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('courses.create') }}" class="btn btn-success">Create New Course</a>
@endsection