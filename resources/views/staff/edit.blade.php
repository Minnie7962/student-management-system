@extends('layouts.app')

@section('content')
<h1>Edit Staff Member: {{ $staff->name }}</h1>

<form action="{{ route('staff.update', $staff->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $staff->name }}">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $staff->email }}">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $staff->phone }}">
    </div>

    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" name="department" class="form-control" value="{{ $staff->department }}">
    </div>

    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" class="form-control" value="{{ $staff->role }}">
    </div>

    <button type="submit" class="btn btn-primary">Update Staff</button>
</form>
@endsection
