@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Grade</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('grades.update', $grade->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student</label>
            <select name="student_id" id="student_id" class="form-select" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $grade->student_id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="exam_id" class="form-label">Exam</label>
            <select name="exam_id" id="exam_id" class="form-select" required>
                @foreach ($exams as $exam)
                    <option value="{{ $exam->id }}" {{ $exam->id == $grade->exam_id ? 'selected' : '' }}>
                        {{ $exam->exam_name }} ({{ $exam->course->course_name }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Grade</label>
            <input type="number" step="0.01" name="grade" id="grade" class="form-control" value="{{ $grade->grade }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('grades.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
