<h2>Course: {{ $course->course_name }}</h2>
<p>Code: {{ $course->course_code }}</p>

<h3>Enrolled Students</h3>

<ul>
    @forelse($course->students as $student)
        <li>{{ $student->student_number }} - {{ $student->first_name }} {{ $student->last_name }}</li>
    @empty
        <li>No students enrolled yet.</li>
    @endforelse
</ul>
<a href="{{ route('courses.index') }}">Back to Courses List</a>