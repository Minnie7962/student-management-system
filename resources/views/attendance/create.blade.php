@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Record Attendance</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="student_id" class="form-label">Student (Optional)</label>
            <select name="student_id" id="student_id" class="form-select">
                <option value="">Select a Student</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="staff_id" class="form-label">Staff (Optional)</label>
            <select name="staff_id" id="staff_id" class="form-select">
                <option value="">Select a Staff</option>
                @foreach ($staff as $staffMember)
                    <option value="{{ $staffMember->id }}">{{ $staffMember->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="present">Present</option>
                <option value="absent">Absent</option>
                <option value="late">Late</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Record Attendance</button>
        <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
