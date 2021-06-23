<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseGroup extends Model
{
     // Table Name
     protected $table = 'course_groups';
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
}
