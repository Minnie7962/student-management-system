@extends('layouts.app')

@section('content')
<h1>Exams</h1>
<a href="{{ route('exams.create') }}" class="btn btn-primary">Add New Exam</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Exam Name</th>
            <th>Exam Date</th>
            <th>Course</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($exams as $exam)
            <tr>
                <td>{{ $exam->id }}</td>
                <td>{{ $exam->exam_name }}</td>
                <td>{{ $exam->exam_date }}</td>
                <td>{{ $exam->course->course_name }}</td>
                <td>
                    <a href="{{ route('exams.edit', $exam->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('exams.destroy', $exam->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
