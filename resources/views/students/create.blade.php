@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Create New Student</h1>
            <form method="POST" action="{{ route('students.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contact_info">Contact Info</label>
                    <input type="text" class="form-control" id="contact_info" name="contact_info" required>
                </div>
                <div class="form-group">
                    <label for="enrollment_number">Enrollment Number</label>
                    <input type="text" class="form-control" id="enrollment_number" name="enrollment_number" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection