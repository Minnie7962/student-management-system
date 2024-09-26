@extends('layouts.app')

@section('content')
<h1>Create New Course</h1>

<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="course_name">Course Name</label>
        <input type="text" name="course_name" class="form-control" value="{{ old('course_name') }}">
    </div>

    <div class="form-group">
        <label for="course_code">Course Code</label>
        <input type="text" name="course_code" class="form-control" value="{{ old('course_code') }}">
    </div>

    <div class="form-group">
        <label for="credits">Credits</label>
        <input type="number" name="credits" class="form-control" value="{{ old('credits') }}">
    </div>

    <button type="submit" class="btn btn-primary">Create Course</button>
</form>
@endsection
