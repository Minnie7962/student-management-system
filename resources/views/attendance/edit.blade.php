@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Attendance</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student (Optional)</label>
            <select name="student_id" id="student_id" class="form-select">
                <option value="">Select a Student</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $attendance->student_id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="staff_id" class="form-label">Staff (Optional)</label>
            <select name="staff_id" id="staff_id" class="form-select">
                <option value="">Select a Staff</option>
                @foreach ($staff as $staffMember)
                    <option value="{{ $staffMember->id }}" {{ $staffMember->id == $attendance->staff_id ? 'selected' : '' }}>
                        {{ $staffMember->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $attendance->date }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="present" {{ $attendance->status == 'present' ? 'selected' : '' }}>Present</option>
                <option value="absent" {{ $attendance->status == 'absent' ? 'selected' : '' }}>Absent</option>
                <option value="late" {{ $attendance->status == 'late' ? 'selected' : '' }}>Late</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Attendance</button>
        <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
