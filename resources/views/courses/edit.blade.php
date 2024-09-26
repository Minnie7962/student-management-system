@extends('layouts.app')

@section('content')
<h1>Edit Course: {{ $course->course_name }}</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="course_name">Course Name</label>
        <input type="text" name="course_name" class="form-control" value="{{ $course->course_name }}">
    </div>

    <div class="form-group">
        <label for="course_code">Course Code</label>
        <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}">
    </div>

    <div class="form-group">
        <label for="credits">Credits</label>
        <input type="number" name="credits" class="form-control" value="{{ $course->credits }}">
    </div>

    <button type="submit" class="btn btn-primary">Update Course</button>
</form>
@endsection
