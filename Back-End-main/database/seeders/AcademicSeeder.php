<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    // 1. Create Students
    $s1 = \App\Models\Student::create([
        'student_number' => '2024-001',
        'first_name' => 'Juan',
        'last_name' => 'Dela Cruz',
        'email' => 'juan@example.com'
    ]);

    $s2 = \App\Models\Student::create([
        'student_number' => '2024-002',
        'first_name' => 'Maria',
        'last_name' => 'Clara',
        'email' => 'maria@example.com'
    ]);

    // 2. Create Courses
    $c1 = \App\Models\Course::create([
        'course_code' => 'IT15',
        'course_name' => 'Back-End Development',
        'capacity' => 40
    ]);

    $c2 = \App\Models\Course::create([
        'course_code' => 'CS102',
        'course_name' => 'Data Structures',
        'capacity' => 30
    ]);

    // 3. Create initial Enrollments (Users linked to Courses)
    $s1->courses()->attach($c1->id);
    $s2->courses()->attach($c1->id);
}
}
