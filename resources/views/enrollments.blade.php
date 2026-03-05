<form action="{{ route('enrollments.store') }}" method="POST">
    @csrf
    <label>Select Student:</label>
    <select name="student_id">
        @foreach($students as $student)
            <option value="{{ $student->id }}">{{ $student->last_name }}</option>
        @endforeach
    </select>

    <label>Select Course:</label>
    <select name="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
        @endforeach
    </select>

    <button type="submit">Enroll Student</button>
</form>