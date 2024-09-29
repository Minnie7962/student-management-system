<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
