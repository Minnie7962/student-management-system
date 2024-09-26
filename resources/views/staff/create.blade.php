@extends('layouts.app')

@section('content')
<h1>Create New Staff Member</h1>

<form action="{{ route('staff.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
    </div>

    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" name="department" class="form-control" value="{{ old('department') }}">
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" class="form-control" value="{{ old('role') }}">
    </div>

    <button type="submit" class="btn btn-primary">Create Staff</button>
</form>
@endsection
