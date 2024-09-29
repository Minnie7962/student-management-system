<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'credits',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
