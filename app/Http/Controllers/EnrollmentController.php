<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;


class EnrollmentController extends Controller


{
    public function store(Request $request)
   {
    //enroll
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);
//mangita sa student ug course
        $student = Student::find($request->student_id);
        $course = Course::find($request->course_id);

       // tan awon kung naka enroll na ba ang student sa course
        if ($student->courses()->where('course_id', $course->id)->exists()) {
            return response()->json(['message' => 'Student is already enrolled in this course.'], 400);
        }

       // naka enroll na ba ang course sa student
        $student->courses()->attach($course->id);
// successful enrollment
        return response()->json(['message' => 'Student enrolled successfully.']);
}
}
