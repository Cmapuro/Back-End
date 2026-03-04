<h1>Available Courses</h1>
@foreach($courses as $course)
    <div>
        <strong>{{ $course->course_name }}</strong> ({{ $course->course_code }})
        <p>Capacity: {{ $course->students->count() }} / {{ $course->capacity }}</p>
        <a href="{{ route('courses.show', $course->id) }}">View Details</a>
    </div>
    <hr>
@endforeach