<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    // Table Name
    protected $table = 'student_data';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
