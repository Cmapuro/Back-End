<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'enrollments';
     // para connect sa students ug courses
    protected $fillable = ['student_id', 'course_id'];
}