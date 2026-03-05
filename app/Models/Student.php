<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // These fields match your activity requirements
    protected $fillable = ['student_number', 'first_name', 'last_name', 'email'];

    // This defines the relationship required for the activity
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'enrollments');
    }
}