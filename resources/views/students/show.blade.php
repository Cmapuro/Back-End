<h2>Student Profile: {{ $student->first_name }} {{ $student->last_name }}</h2>
<p>Email: {{ $student->email }}</p>

<h3>Enrolled Courses</h3>
<ul>
    @forelse($student->courses as $course)
        <li>{{ $course->course_code }} - {{ $course->course_name }}</li>
    @empty
        <li>No enrollments found.</li>
    @endforelse
</ul>
<a href="{{ route('students.index') }}">Back to Students List</a>