<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    //makita ang courses
    public function index() {
    $courses = Course::all();
    return view('courses.index', compact('courses'));
}

public function show($id) {
    //kinsay enroll sa course
    $course = Course::with('students')->findOrFail($id);
    return view('courses.show', compact('course'));
}
}
