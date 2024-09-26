<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'attendance_report',
        'grade_report',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
