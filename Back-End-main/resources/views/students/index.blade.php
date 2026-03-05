<h1>All Students</h1>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Student Number</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($students as $student)
            <tr>
                <td>{{ $student->student_number }}</td>
                <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}">View Profile</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" style="text-align: center;">
                    No students found. Run <b>php artisan migrate:fresh --seed</b>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>