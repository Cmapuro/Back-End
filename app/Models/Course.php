<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_code', 'course_name', 'capacity'];

    ///many to many relationship sa students
        public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments');
    }
}