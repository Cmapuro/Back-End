<?php

namespace App\Http\Controllers;

use App\Models\Student; // The Controller uses the Model
use Illuminate\Http\Request;

class StudentController extends Controller 
{
  public function index()
{
    // makita ang students
 $students = Student::all(); 
    return view('students.index', compact('students'));
}
    public function show($id)
    {
        // makita ang details sa student
        $student = Student::with('courses')->findOrFail($id); 
        return view('students.show', compact('student'));
    }
}
