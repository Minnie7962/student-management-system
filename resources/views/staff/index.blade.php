@extends('layouts.app')

@section('content')
<h1>Staff Members</h1>
<a href="{{ route('staff.create') }}" class="btn btn-primary">Add New Staff</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($staff as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->department }}</td>
                <td>{{ $member->role }}</td>
                <td>
                    <a href="{{ route('staff.edit', $member->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('staff.destroy', $member->id) }}" method="POST" style="display: inline;">
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
