@extends('layouts.app')

@section('content')
<h1>Create New Exam</h1>

<form action="{{ route('exams.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exam_name">Exam Name</label>
        <input type="text" name="exam_name" class="form-control" value="{{ old('exam_name') }}">
    </div>

    <div class="form-group">
        <label for="exam_date">Exam Date</label>
        <input type="date" name="exam_date" class="form-control" value="{{ old('exam_date') }}">
    </div>

    <div class="form-group">
        <label for="course_id">Course</label>
        <select name="course_id" class="form-control">
            @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create Exam</button>
</form>
@endsection
