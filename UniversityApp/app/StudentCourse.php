<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    // Table Name
    protected $table = 'student_courses';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function course(){
     return $this->belongsTo(Course::class);
    }
}
