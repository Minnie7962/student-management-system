<h1>Edit Student</h1>
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $student->name }}" placeholder="Name">
    <input type="date" name="date_of_birth" value="{{ $student->date_of_birth }}" placeholder="Date of Birth">
    <select name="gender">
        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
        <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Other</option>
    </select>
    <input type="text" name="contact_info" value="{{ $student->contact_info }}" placeholder="Contact Info">
    <input type="text" name="enrollment_number" value="{{ $student->enrollment_number }}" placeholder="Enrollment Number">
    <button type="submit">Update</button>
</form>
